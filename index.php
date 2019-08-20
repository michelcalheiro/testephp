<?php
 
    /**
     * For demonstration purposes, the data is defined here.
     * In a real scenario it should be loaded from a database.
     */
    $channel = array("title"        => "Example RSS feed",
                     "description"  => "Example of a RSS feed, part of a programming tutorial on making a feed in PHP.",
                     "link"         => "http://www.broculos.net",
                     "copyright"    => "Copyright (C) 2008 Broculos.net");
 
    $items = array(
        array("title"       => "Example 1",
              "description" => "This is the description of the first example.",
              "link"        => "http://www.example.com/example1.html",
              "pubDate"     => date("D, d M Y H:i:s O", mktime(22, 10, 0, 12, 29, 2008)))
        , array("title"       => "Example 2",
                "description" => "This is the description of the second example.",
                "link"        => "http://www.example.com/example2.html",
                "pubDate"     => date("D, d M Y H:i:s O", mktime(14, 27, 15, 1, 3, 2008)))
    );
 
    $output = '<?xml version="1.0" encoding="ISO-8859-1"?>';
    $output .= '<rss version="2.0">';
    $output .= "<channel>";
    $output .= "<title>" . $channel["title"] . "</title>";
    $output .= "<description>" . $channel["description"] . "</description>";
    $output .= "<link>" . $channel["link"] . "</link>";
    $output .= "<copyright>" . $channel["copyright"] . "</copyright>";
 
    foreach ($items as $item) {
        $output .= "<item>";
        $output .= "<title>" . $item["title"] . "</title>";
        $output .= "<description>" . $item["description"] . "</description>";
        $output .= "<link>" . $item["link"] . "</link>";
        $output .= "<pubDate>" . $item["pubDate"] . "</pubDate>";
        $output .= "</item>";
    }
    $output .= "</channel>";
    $output .= "</rss>";
 
    header("Content-Type: application/rss+xml; charset=ISO-8859-1");
    echo $output;
 
?>
