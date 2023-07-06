<?php
session_start();

function con()
{
	return mysqli_connect("localhost", "root", "root", "zoo_matching");
}

