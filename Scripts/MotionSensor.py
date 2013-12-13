import RPi.GPIO as GPIO
import time
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BOARD)
#GPIO.setmode(GPIO.BCM)
MoSenPin = 16
LEDPin   = 15
GPIO.setup(LEDPin,GPIO.OUT)
GPIO.setup(MoSenPin,GPIO.IN)
def blink(LEDPin):           # function to make LED Blink
    Stauts_On = GPIO.output(pin,GPIO.HIGH)
    time.sleep(1)
    return
def main(MoSenPin,LEDPin):
   while 1:
      if GPIO.input(MoSenPin,GPIO.HIGH):
         blink(LEDPin)
      return
      GPIO.cleanup()
