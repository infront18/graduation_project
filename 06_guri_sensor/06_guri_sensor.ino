int distance = 0; //Cm로 계산된 거리값을 저장해두기위해 변수를 선언합니다.



void setup() {
  Serial.begin(9600);
}

void loop() {
  int volt = map(analogRead(A0), 0, 1023, 0, 5000);
  distance = (27.61 / (volt - 0.1696)) * 1000;
  
  Serial.print(distance);  //거리값을 시리얼모니터로 출력해줍니다.
  Serial.println(" cm");
  Serial.println(" ");
  delay(500);
}
