<? php
function findDvd($title) /*func for work with a table 'dvd' */
{
	$title = dbQuote($title);
	$query = "SELECT * FROM dvd WHERE title LIKE '% {$title} %'";
}