<?php

function check_prerequisites_perl() {
  
  $lm_perl = "find `perl -e 'print \"@INC\"'` -name *.pm";
  exec($lm_perl,$output);
  $mm_perl = array();
  
  print "Beginning Perl prerequisite checks\n";
  
  $xml_p = array_ereg_search('/XML/Parser.pm', $output);
  $xml_s = array_ereg_search('/XML/SimpleObject.pm', $output);
  $dbi = array_ereg_search('DBI.pm', $output);
  $mcu = array_ereg_search('/Math/Calc/Units', $output);
  
  if (!empty($xml_p)) {
    print "Prerequisite XML/Parser.pm located\n";
  }
  else {
    print "Unable to locate XML/Parser.pm prerequisite\n";
    return(1);
  }
  
  if (!empty($xml_s)) {
    print "Prerequisite XML/SimpleObject.pm located\n";
  }
  else {
    print "Unable to locate XML/SimpleObject.pm prerequisite\n";
    return(1);
  }
  
  if (!empty($dbi)) {
    print "Prerequisite DBI.pm located\n";
  }
  else {
    print "Unable to locate DBI.pm prerequisite\n";
    return(1);
  }
  
  if (!empty($mcu)) {
    print "Prerequisite /Math/Calc/Units.pm located\n";
  }
  else {
    print "Unable to locate /Math/Calc/Units.pm prerequisite\n";
    return(1);
  } 
  
  if (empty($xml_p) || empty($xml_s) ||  empty($dbi) ||  empty($mcu)) {    
    return(1);
  }
  else {
    return(0);
  }
}

function check_prerequisites_php() {
  
  print "Beggining PHP prerequisite checks\n";
  
  $lm_php=get_loaded_extensions();
  $mm_php=array();
  
  if (!(in_array("dom",$lm_php))) {
    print "PHP Pre-req check: DOM missing\n";
    return(1);
  }
  else {
    print "Prerequisite dom located\n";
  }

  
  if (!(in_array("mbstring",$lm_php))) {
    print "PHP Pre-req check: php-mbstring missing\n";
    return(1);
  }
  else {
    print "Prerequisite mbstring located\n";
  }

  
  if (!(in_array("mysql", $lm_php))) {
    print "PHP Pre-req check: php-mysql missing.\n";
    return(1);
  }
  else {
    print "Prerequisite mysql located\n";
  }
  
  if (!(in_array("xml", $lm_php))) {
    print "PHP Pre-req missing: php-xml\n";
    return(1);
  }
  else {
    print "Prerequisite xml located\n";
  }    
}

function array_ereg_search($val, $array) {
  $i = 0;
  $return = array();
  foreach($array as $v) {
    if(eregi($val, $v)) $return[] = $i;
    $i++;
  }
  return $return;
}

print "Starting...\n";
$s0 = check_prerequisites_php();
if($s0 == 0) {
  print "All required PHP modules are available.\n";              
  $s1 = check_prerequisites_perl();
  if($s1 == 0) {
    print "All required Perl modules are available.\n";
    }
  else {
    print "Perl module requirements failed.\n";
  }
 }
else {
     print "PHP module requirements failed.\n";
}    

?>