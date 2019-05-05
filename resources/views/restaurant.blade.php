@extends('layouts.app')
@section('content')
<div class="container">
  <br>
  <div class="row"><h1 >Restaurant</h1></div>
  <div class="row">
    <div class="col-md-10"><p class="font-size-">
      AUTHENTIC UZBEK NATIONAL CUISINE AT SULATAN RESTAURANT <br>
      From the Super Breakfast Buffet in the morning to delicious traditional Uzbek cuisine in the evening, our Parkrestaurant offers a lot of variety. guests can enjoy dishes crafted from fresh, local ingredients and in summer they can appreciate their meals alfresco on the restaurant’s terrace overlooking the park. Guests can enjoy a selection of 30 teas in our Tea Lounge.
    </p></div></div>

     <div class="dividercolor"></div>
    <div class="row ">
      <img src="{{asset('img/14.jpg')}}" class="m100">
    </div>

     <div class="dividercolor"></div>
    <br>
    <div class="row">
      <h2 class="mx-auto">SULTAN RESTAURANT</h2>
      <p class="font-size-">The skilled chefs at restaurant dedicate themselves to crafting authentic UZBEK cuisine from fresh, local ingredients. Mindful of patrons' well-being, the restaurant offers a seasonal menu featuring healthy options. Summer guests can enjoy the chefs' creations on the terrace, which overlooks the greenery of a 5,000-square-meter park. Pick a bottle from our extensive wine list to complement your meal.
        <br>
      restaurant is pleased to host the hotel’s National Breakfast Buffet, where guests can sample a range of hot breakfast dishes, baked goods and fresh fruit.</p>
    </div>

     <div class="dividercolor"></div>
    <div class="row">
      <h4><pre>  OPENING HOURS</pre></h4>
    </div>
    <div class="row">
      <ul class="font-size-">
        <li>Breakfast buffet</li>
        <li>06:30 – 10:30 (Mon – Fri)</li>
        <li>06:30 – 11:00 (Sat – Sun, public holidays)</li>
      </ul>
    </div>
    <div class="row">
      <ul class="font-size-">
        <li>Brunch</li>
        <li>12:00-15:00 (sundays)</li>
      </ul>
    </div>
    <div class="row">
      <ul class="font-size-">
        <li>Dinner</li>
        <li>18:00 – 23:00 (Daily)</li>
      </ul>
    </div>
    <div class="row">
      <a href="{{asset('img/menu.jpg')}}" class="btn bg-fiolet white-color" target="_blank">Menu</a>
    </div>
    
  </div>
  <br><br>
  @endsection