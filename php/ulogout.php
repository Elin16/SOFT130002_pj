<?php
session_start();
unset($_SESSION['userID']);
echo json_encode(true);