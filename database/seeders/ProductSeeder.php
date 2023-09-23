<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(1)->create(
            [
                'title' => 'TrailMaster Suspension Fork',
                'price' => '$2,280.00',
                'picture' => 'assets/images/product1.png',
                'description' => 'Conquer rugged trails with confidence using the TrailMaster Suspension Fork. Designed for off-road adventurers and mountain biking enthusiasts, this fork offers 120mm of plush suspension travel to soak up bumps and obstacles, providing a smoother and more controlled ride. Its robust construction and precision-tuned damping ensure optimal performance on a variety of terrains. With adjustable rebound and compression settings, you can fine-tune the fork to suit your riding preferences. The TrailMaster Suspension Fork is the ultimate companion for those who seek adrenaline-pumping trail experiences while maintaining control and comfort.'
            ]
        );

        Product::factory(1)->create(
            [
                'title' => 'UrbanChic City Bike',
                'price' => '$1,280.00',
                'picture' => 'assets/images/product2.png',
                'description' => 'The UrbanChic City Bike is the epitome of timeless elegance and practicality, designed exclusively for the modern urban cyclist. Crafted with the utmost attention to detail, this ladies\' city bike combines classic aesthetics with contemporary functionality. Its lightweight aluminum frame boasts a step-through design for easy mounting and dismounting, ensuring a comfortable and graceful ride. Equipped with a sturdy front basket, the UrbanChic City Bike adds a touch of convenience to your daily commute or leisurely rides. This stylish and functional basket offers ample storage space for your essentials, whether it\'s groceries, a picnic, or your favorite book. The bike\'s comfortable saddle and ergonomic handlebars provide a relaxed riding position, while the 7-speed Shimano gearing system ensures smooth and efficient pedaling, whether you\'re navigating bustling city streets or scenic bike paths. Embrace the charm of city cycling with the UrbanChic City Bike and experience the perfect blend of fashion and functionality on every ride. Whether you\'re running errands, meeting friends for brunch, or exploring the city\'s hidden gems, this bike is your trusted companion for a chic and effortless journey. Rediscover the joy of city living with a bike that\'s as stylish as it is practical.'
            ]
        );

        Product::factory(1)->create(
            [
                'title' => 'X-TremeX Bike',
                'price' => '$1,280.00',
                'picture' => 'assets/images/product3.png',
                'description' => 'Introducing the X-TremeX BMX Bike, an adrenaline-fueled masterpiece designed for the thrill-seeking rider who craves excitement and versatility on two wheels. This BMX-style bike is engineered to conquer the urban jungle, skateparks, and dirt tracks with unmatched style and performance.
The X-TremeX boasts a rugged yet lightweight steel frame built to withstand the rigors of freestyle tricks and off-road adventures. Its responsive and precision-tuned suspension fork offers superb control and shock absorption for those daring jumps and landings. The sturdy 20-inch alloy wheels are paired with knobby tires to provide excellent traction on a variety of surfaces.
Equipped with a 360-degree rotor for handlebar spins and a rugged stunt peg set for grinding and tricks, the X-TremeX BMX Bike is your ultimate tool for mastering BMX maneuvers. Whether you\'re perfecting your tailwhips, tackling dirt jumps, or showing off your skills at the local skatepark, this bike is your ticket to extreme fun and endless thrills.
    Embrace the thrill of BMX riding with the X-TremeX and push your boundaries as you perform jaw-dropping stunts and conquer challenging terrain. Join the ranks of fearless riders who know that when it comes to BMX, the X-TremeX is the only choice for those who crave the X-treme.'
            ]
        );

        Product::factory(1)->create(
            [
                'title' => 'AeroSwift Elite Road Bike',
                'price' => '$3,280.00',
                'picture' => 'assets/images/product4.png',
                'description' => 'The AeroSwift Elite Road Bike is the embodiment of pure speed and efficiency, designed to give cyclists an edge in their pursuit of faster lap times and smoother rides. This road bike is engineered with precision and aerodynamics in mind, making it the perfect companion for riders who demand nothing but the best.

At the heart of the AeroSwift Elite is its advanced aerodynamic frame, meticulously crafted to minimize air resistance and maximize power transfer. The carbon-fiber construction strikes the perfect balance between stiffness and comfort, allowing you to maintain optimal speed without sacrificing ride quality. The integrated aero handlebars and hidden cabling further reduce drag, ensuring a clean, streamlined profile.

The AeroSwift Elite Road Bike is equipped with a high-performance Shimano Ultegra groupset and aerodynamic wheels, delivering lightning-fast shifting and responsive braking. Whether you\'re competing in a time trial or tackling your favorite routes, this road bike\'s cutting-edge technology and aerodynamic design will help you achieve your speed goals with ease.

Elevate your cycling experience with the AeroSwift Elite Road Bike and experience the thrill of slicing through the wind as you effortlessly push the boundaries of speed and endurance. It\'s a bike designed for those who crave the rush of high-speed rides and the pursuit of new personal bests.'
            ]
        );

        Product::factory(1)->create(
            [
                'title' => 'VelocityPro Carbon Road Bike',
                'price' => '$2,280.00',
                'picture' => 'assets/images/product5.png',
                'description' => 'The VelocityPro Carbon Road Bike is the pinnacle of speed and precision, meticulously crafted for riders who crave the thrill of pushing their limits on the open road. This road bike embodies the perfect fusion of cutting-edge technology and aerodynamic design, delivering a ride that\'s unmatched in speed, agility, and performance.

    The VelocityPro features an ultra-lightweight carbon fiber frame that\'s not only stiff for power transfer but also designed with aerodynamics in mind. Its sleek, wind-tunnel-tested frame design minimizes drag and maximizes efficiency, allowing you to slice through the air effortlessly. The carbon fork ensures responsive handling and precise control, even at high speeds.

Equipped with a top-of-the-line Shimano Dura-Ace groupset and aerodynamic wheels, the VelocityPro is optimized for racing and long-distance riding. Whether you\'re competing in a road race or embarking on an epic solo journey, this road bike is engineered to deliver unmatched speed and performance, helping you achieve your personal bests and leave the competition in the dust.

    Experience the thrill of speed with the VelocityPro Carbon Road Bike, where every pedal stroke propels you forward with remarkable efficiency. It\'s a machine that turns your passion for speed into a reality, allowing you to conquer roads and break records.'
            ]
        );
    }
}
