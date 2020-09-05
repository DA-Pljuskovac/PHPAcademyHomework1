<?php
$name=$_POST["name"];
$fname=$_POST["family_name"];
$age=$_POST["age"];
$pet=$_POST["pet"];
$fav_num=$_POST["fav_num"];
$least_fav_num=$_POST["least_fav_num"];
$name_length=strlen($name);
$fname_length=strlen($fname);
$my_name='Domagoj';
$my_fname='Pljuskovac';
$my_age=21;
$my_pet='dog';
$my_name_length=strlen($my_name);
$my_fname_length=strlen($my_fname);
$age_diff=abs($my_age-$age);
if ($name!=''){
    //input information
    echo '<h2 class="subtitle"> Your name is '.$name.' and your family name
          is '.$fname.'. You are '.$age.' years old.</h2>';
    //pet check
    if ($pet === $my_pet)
    {
        echo '<h2 class="subtitle">Your favourite house pet is a '.$pet.'.</h2>';
        echo '<h3 class="subtitle">We both like dogs the most.</h3>';
    }else if($pet == 'none')
    {
        echo '<h4 class="subtitle">You don\'t have a favourite house pet. </h4>';
    } else if ($pet <> $my_pet)
    {
        echo '<h2 class="subtitle">Your favourite house pet is a '.$pet.'.</h2>';
    }
    echo '<h2 class="subtitle">Your name has '.$name_length.' letters.</h2>';
    echo '<h2 class="subtitle">Your family name has '.$fname_length.' letters.</h2>';


    //name_length check
    if ($name_length>$my_name_length)
    {
        echo '<h3 class="subtitle">Your name is longer than mine.</h3>';
    } elseif ($name_length<$my_name_length)
    {
        echo '<h3 class="subtitle">Your name is shorter than mine.</h3>';
    }
    else{
        echo '<h3 class="subtitle">Our names are the same length!</h3>';
    }

    //fname_length check
    if ($fname_length>$my_fname_length)
    {
        echo '<h3 class="subtitle">Your family name is longer than mine.</h3>';
    } elseif ($fname_length===$my_fname_length)
    {
        echo '<h3 class="subtitle">Our family name are the same length.</h3>';
    }
    else{
        echo '<h3 class="subtitle">Your family name is shorter than mine.</h3>';
    }
    //age check
    if ($age<$my_age && $age >10)
    {
        echo '<h3 class="subtitle">You are '.$age_diff.' years younger than me.</h3>';
    } else if ($age ==$my_age)
    {
        echo '<h3 class="subtitle">You and I are both 21 years old.</h3>';
    } else if ($age >$my_age)
    {
        echo '<h3 class="subtitle">You are '.$age_diff.' years older than me</h3>';
    }
    //php operatori
    echo '<h3 class="subtitle">Your favourite number is: x='.$fav_num.'.<br> Your least favourite number is: y='.$least_fav_num.'.</h3>';
    echo '<h3 class="subtitle">x*y= '.($fav_num*$least_fav_num).'</h3>';
    echo '<h3 class="subtitle">x/y= '.($fav_num/$least_fav_num).'</h3>';
    echo '<h3 class="subtitle">x%y= '.($fav_num%$least_fav_num).'</h3>';
    echo '<h3 class="subtitle">x^y= '.($fav_num**$least_fav_num).'</h3>';
    echo '<h3 class="subtitle">x=x+y= '.($fav_num+=$least_fav_num).'</h3>';
    echo '<h3 class="subtitle">x=x-y= '.($fav_num-=$least_fav_num).'</h3>';
    echo '<h3 class="subtitle">x=x*y= '.($fav_num*=$least_fav_num).'</h3>';
    echo '<h3 class="subtitle">x=x/y= '.($fav_num/=$least_fav_num).'</h3>';
    echo '<h3 class="subtitle">x= '.$fav_num.'<br>y= '.$least_fav_num.'</h3>';

}else
{
    echo '<h2 class="subtitle">You haven\'t entered your information on the About page.</h2>';
    echo '<h3 class="subtitle">Click the button below to go the About page.</h3>';
    echo '<a class="button" href="about.php">Go to About</a>';
}