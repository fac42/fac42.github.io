<?php
    // Alien descriptions array
    $alien_descriptions = array("Your homeworld is Aiur. Your species major advancements are in advanced technology and psionic mastery. Your species are the remanant of a once-mighty empire. Your species were created by another known as the Xel'Naga.","Your homeworld is Char. Your species resemble giant insectoid creatures. Your species is controlled by an overarching intelligence known as the Overmind. Your species was created through genetic experimentation by another advanced civilization.","Your homeworld is Xenomorph Prime. Your species is one ofthe deadliest of all known alien species, and require a host organism in order to reproduce. Your species incoporate the genetic material of their hosts into their own.","Your homeworld is Necros. Your species was created through the betrayal of 'Star Gods', who took your original forms to gain more power. The technological prowess of your species is unmatched by others. Your species has a deep hatred for other species that are purely biological in nature.");
    // Selecting a random value from the descriptions array
    $alien = $alien_descriptions[rand(0,3)];
    // Alien pictures array
    $alien_picture = array("images/alien1.jpg", "images/alien2.jpg", "images/alien3.jpg", "images/alien4.jpg");
    // Selecting a random value from the pictures array
    $alien_pic = $alien_picture[rand(0,3)];
    // Robot descriptions array
    $robot_descriptions = array("Your model number is: RGM-79. You are a mobile fighter equipped with the BR-M-79C-1 Beam Spray Gun and the BLASH HB-L-03/N-STD Hyper Bazooka. You are able to wield a wide variety of weapons.","Your model numer is: MS-06. You are a mobile fighter equipped with the ZMP-50D 120mm Machine Gun and the MIP-B6 Cracker Grenade. You are durable and and adaptable to different kinds of combat situations.","Your model number is: RX-78-2. You wield the RX*M-Sh-008/S-01025 Shield and the BAUVA*XBR-M-79-07G Beam Rifle. You are the pinnacle of modern robot design.","Your model number is: MS-07. You wield the Heat Sword Type-IV and the 5-barrel 75mm Machine Gun. You are highly agile, and specialize in close range combat.");
    // Selecting a random value from the descriptions array
    $robot = $robot_descriptions[rand(0,3)];
    // Robot pictures array
    $robot_picture = array("images/robot1.jpg", "images/robot2.jpg", "images/robot3.jpg", "images/robot4.jpg");
    // Selecting a random value from the pcitures array
    $robot_pic = $robot_picture[rand(0,3)];
?>