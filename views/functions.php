<?php 
    function index(){
        return view('index');
    }

    function tab1(){
        return respond("Merhaba Dünya !!",200);
    }

    function tab2(){
        return respond("Merhaba Uzaylı !!",200);
    }
?>