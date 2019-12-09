#include <Adafruit_Sensor.h>
#include <DHT.h>
#include <DHT_U.h>

DHT mydht (2,DHT11);

void setup() {
  mydht.begin();
  Serial.begin(9600);
 }

void loop() {
  int temp = mydht.readTemperature();
  int humi = mydht.readHumidity();
  int suwi = analogRead(A0);  // 수분센서의 신호를 측정합니다.
  Serial.print ("온도값 : ");
  Serial.print (temp);
  Serial.print ("    ");
  Serial.print ("습도값 : ");
  Serial.println (humi);
  Serial.print ("수분센서값 : ");
  Serial.println (suwi);     //수분센서값
  delay(500); 
  }
