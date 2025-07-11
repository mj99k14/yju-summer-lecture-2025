<?php

//1) 쿠키 생성 요청(a)
echo "dsjfjsjfjs";

setcookie("bar", "milk", time() - 3600);
setcookie("foo", "beer");
setcookie("pos", "water");
setcookie("kin", "cilder");
//bar = milk
//http response 매세지에는  bar라는 이름과 milk라는 값을 가지는 쿠키를 생성하는 메세지를 작성하시오.


//2) 쿠키 생성(c)
//web browser가 local에 쿠키 정보를 파일로 저장
//도메인 단위 관리 :localhost//bar=milk 


//3) 쿠키 전달(c)
//4) 쿠키 읽기(a)
