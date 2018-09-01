<?php
/**
 * Created by IntelliJ IDEA.
 * User: zulup
 * Date: 8/30/2018
 * Time: 2:13 PM
 */
function myconnection(){

   return mysqli_connect("localhost", "root", "", "bitsell");

 //return mysqli_connect("sql201.epizy.com","epiz_22588103","ETIh22ynL","epiz_22588103_oss");
}