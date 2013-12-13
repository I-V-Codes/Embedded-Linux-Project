import RPi.GPIO as GPIO   # Import class/package for GPIO PINS
import time               # Import class/package for time delay
GPIO.setwarnings(False)   # Disable warning message 
def blink(pin):           # function to make LED Blink
    GPIO.output(pin,GPIO.HIGH)
    time.sleep(1)
    GPIO.output(pin,GPIO.LOW)
    time.sleep(1)
    return
GPIO.setmode(GPIO.BOARD)   # sets up GPIO PINS
GPIO.setup(15,GPIO.OUT)    # pin 15 - GPIO 22 is an output
while 1:                   # infinite loop
    blink(15)              
GPIO.cleanup()             # cleans up signals 
