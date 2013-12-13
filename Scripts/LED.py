import sqlite3
import datetime
import RPi.GPIO as GPIO   # Import class/package for GPIO PINS
import time              
GPIO.setwarnings(False)   # Disable warning message
n = 0;
# function to make LED Blink
def blink(pin):           
    GPIO.output(pin,GPIO.HIGH)
    LED_Status = 'ON'
    time.sleep(1)
    GPIO.output(pin,GPIO.LOW)
    time.sleep(1)
    return LED_Status

GPIO.setmode(GPIO.BOARD)   # sets up GPIO PINS
GPIO.setup(15,GPIO.OUT)    # pin 15 - GPIO 22 is an output
Date_Time = str(datetime.datetime.now())
db = sqlite3.connect('/home/pi/files/school/Projects/Embedded/data/LED_DB')  #connects database with this script by db variable
cursor = db.cursor()       # creates cursor for database
db.commit()

while n<=5:                   # infinite loop
    LED_Status= blink(15)
    TableData = [{LED_Status,Date_Time}]
    print TableData
    #cursor.executemany('INSERT INTO LED_STATUS Values(?,?)', TableData )
    cursor.execute('INSERT INTO LED_STATUS Values(?,?)', (LED_Status,Date_Time))
    db.commit()
    n = n + 1
GPIO.cleanup()             # cleans up signals 
db.close()                 # closes connection to database when done
