int jodo = A1;   // 조도센서 연결


void setup() {
    Serial.begin(9600); // Serial 통신을 초기화 합니다.
    pinMode(jodo,INPUT);   //조도센서
}

void loop() {
    jodo = analogRead(A1);  // 조도센서
    Serial.print("Jodo : ");    //조도센서
    Serial.println(jodo); //  조도센서
    delay(1000);
}
