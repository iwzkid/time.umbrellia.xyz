<?php
#LOGIN BASIC PAGE - displays the login form and enables superuser functionality - add_calendar, add_notes, mark_important, delete

include 'login/loginform.php';

#IF LOGIN IS SUCCESSFULL DO ->

include 'login/add_calendar.php';
include 'login/add_notes.php';
include 'login/important_or_delete.php';
include 'login/delete.php';