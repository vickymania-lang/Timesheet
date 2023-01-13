<?php

    session_start();
    if(session_destory()){
        header("location: index.html");
    }



?>