<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
            'name' => 'Apple MacBook Pro (2018)',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
<p>Processor - Six Core Intel Core i7<br />Processor Clock Speed - 2.2-4.1GHz<br />Display Size - 15.4"<br />RAM - 16GB<br />RAM Type - DDR4 2400MHz (Onboard)<br />Storage - 256GB SSD</p>
</div>',
                'colors' => '#c0c0c0',
                'price' => 214200,
                'discount' => 205000,
                'tag' => 'New',
                'category_id' => 1,
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'HP Probook X360 440 G1',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
<p>Generation - 8th Gen<br />Processor - Intel Core i7 8550U<br />Processor Clock Speed - 1.80-4.0GHz<br />Display Size - 14"<br />RAM - 8GB<br />RAM Type - DDR4<br />Storage - 512GB SSD<br />Operating System - Free Dos</p>
</div>',
                'colors' => '#000000',
                'price' => 94920,
                'discount' => 91000,
                'tag' => 'New',
                'category_id' => 1,
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Apple iPad Pro',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
<p>Model - Apple iPad Pro 11 Inch WiFi+Cellular<br />Processor Type - A12X Bionic chip<br />Internal Memory - 256GB<br />Display Type - Liquid Retina display<br />Display Size - 11"<br />Screen Resolution - 2388 x 1668<br />Connectivity - Wi-Fi, Bluetooth 5.0, USB, GPS</p>
</div>',
                'colors' => '#c0c0c0',
                'price' => 115500,
                'discount' => 111000,
                'tag' => 'Hot',
                'category_id' => 7,
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            3 => 
            array (
                'id' => 5,
            'name' => 'Google Pixel 3 (64 GB)',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
<ul class="i8Z77e">
<li class="TrT0Xe">Processor: Qualcomm Snapdragon 845 2.5 GHz quad-core.</li>
<li class="TrT0Xe">Display: 5.5 inch, 2160x1080-pixel</li>
<li class="TrT0Xe">Operating system: Android 9 Pie.</li>
<li class="TrT0Xe">RAM: 4GB LPDDR4.</li>
<li class="TrT0Xe">Storage: 64GB internal.</li>
<li class="TrT0Xe">Cameras: 12.2-megapixel rear f/1.8 dual-pixel</li>
</ul>
</div>',
                'colors' => '#ff80ff,#c0c0c0,#000000',
                'price' => 71900,
                'discount' => 71000,
                'tag' => 'New',
                'category_id' => 2,
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Samsung Galaxy Note 9',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
<ul class="i8Z77e">
<li class="TrT0Xe">CPU: Qualcomm Snapdragon 845.</li>
<li class="TrT0Xe">Memory: 6/8GB.</li>
<li class="TrT0Xe">Storage: 128.</li>
<li class="TrT0Xe">MicroSD storage: Up to 512GB.</li>
<li class="TrT0Xe">Screen size: 6.4 inches.</li>
<li class="TrT0Xe">Resolution: 2960 x 1440.</li>
<li class="TrT0Xe">Connectivity: Bluetooth 5, NFC.</li>
<li class="TrT0Xe">Battery: 4,000mAh</li>
</ul>
</div>',
                'colors' => '#0080c0,#000000,#804040',
                'price' => 95000,
                'discount' => 94000,
                'tag' => 'Hot',
                'category_id' => 2,
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-10',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'A4tech Bloody G437',
                'image_name' => '1.jpg',
                'description' => '<ul class="i8Z77e">
<li>Driver Unit: 40 mm Neodymium Magnet</li>
<li>Frequency Response: 20-20000 Hz</li>
<li>Sensitivity: 100 dB</li>
<li>Impedance: 32 ohm</li>
</ul>',
                'colors' => '#000000',
                'price' => 3000,
                'discount' => 2290,
                'tag' => 'Hot',
                'category_id' => 3,
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-12',
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'Canon EOS 6D Mark II',
                'image_name' => '1.jpg',
                'description' => '<p>Model - Canon 6D Mark II<br />Mega Pixels - 26.2 Megapixels<br />Lens Mount - Canon EF Lens<br />Processor - DIGIC 7<br />Sensor Type - CMOS Senso</p>',
                'colors' => '#000000',
                'price' => 105530,
                'discount' => 101000,
                'tag' => 'Hot',
                'category_id' => 4,
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            7 => 
            array (
                'id' => 12,
                'name' => 'Nikon D7200 Camera',
                'image_name' => '1.jpg',
                'description' => '<p>Model - Nikon D7200<br />Effective Pixels - 24.2 Megapixels<br />Lens Mount - AF-S 18-140mm<br />Processor - Expeed 4<br />Sensor Type - CMOS Sensor<br />Screen Type - TFT LCD<br />Screen Size - 3.2"</p>',
                'colors' => '#000000',
                'price' => 78850,
                'discount' => 75000,
                'tag' => 'New',
                'category_id' => 4,
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            8 => 
            array (
                'id' => 15,
                'name' => 'Canon PowerShot SX730',
                'image_name' => '1.jpg',
            'description' => '<p>Model - Canon PowerShot SX730 HS<br />Resolution (MP) - 20.3 Mega pixels<br />Display (Inch) - 3" TFT Color LCD Display<br />Optical Zoom (X) - 40x<br />Battery - NB-13L Battery</p>',
                'colors' => '#000000',
                'price' => 31500,
                'discount' => 30000,
                'tag' => 'New',
                'category_id' => 4,
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            9 => 
            array (
                'id' => 16,
                'name' => 'Microsoft Xbox One',
                'image_name' => '1.jpg',
                'description' => '<ul>
<li>Seamless profile and controller pairing</li>
<li>Responsive thumbsticks</li>
<li>Triggers and bumpers are designed for quick access</li>
<li>Menu and View buttons quick for easy navigation</li>
<li>Remap buttons through the Xbox Accessories App</li>
</ul>',
                'colors' => '#000000',
                'price' => 5100,
                'discount' => 4300,
                'tag' => 'Gaming',
                'category_id' => 6,
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            10 => 
            array (
                'id' => 17,
                'name' => 'Logitech Wireless F710',
                'image_name' => '1.jpg',
                'description' => '<p>Model - Logitech F710<br />Type - Gamepad</p>',
                'colors' => '#004080,#c0c0c0',
                'price' => 5000,
                'discount' => 4500,
                'tag' => 'New',
                'category_id' => 6,
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            11 => 
            array (
                'id' => 18,
                'name' => 'ADATA 20100 mAh',
                'image_name' => '1.jpg',
                'description' => '<ul>
<li>Battery type: Rechargeable Lithium-ion battery</li>
<li>Special features: Dual USB ports</li>
<li>Other features: 20100 mAh. LED Flashlight</li>
<li>Input: DC 5V/2A</li>
<li>Output: DC 5V/2.1A max</li>
</ul>',
                'colors' => '#000000',
                'price' => 2500,
                'discount' => 1999,
                'tag' => 'Hot',
                'category_id' => 5,
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            12 => 
            array (
                'id' => 19,
                'name' => 'Joyroom ZHI 10000 mAh',
                'image_name' => '1.jpg',
                'description' => '<ul>
<li>Input：5V 2A</li>
<li>Output：5V 2.1A</li>
<li>Power: 10000 mAh</li>
<li>Digital Display</li>
<li>LED Lighting</li>
</ul>',
                'colors' => '#0000ff,#000000',
                'price' => 3300,
                'discount' => 2999,
                'tag' => 'Hot',
                'category_id' => 5,
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            13 => 
            array (
                'id' => 20,
                'name' => 'Astrum 10000mAh',
                'image_name' => '1.jpg',
                'description' => '<ul>
<li>Battery: 10000mAh capacity li-polymer</li>
<li>Connectors: 2 x USB Port</li>
<li>Ouput: 1 - 5V 1A / 2 - 5V 2.1A</li>
<li>Input: 5V 2A</li>
</ul>',
                'colors' => '#000000',
                'price' => 1500,
                'discount' => 1500,
                'tag' => 'New',
                'category_id' => 5,
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            14 => 
            array (
                'id' => 21,
                'name' => 'Mi 10000 mAh v2',
                'image_name' => '1.jpg',
                'description' => '<ul>
<li><span class="a-list-item">10000mAH lithium-polymer battery</span></li>
<li><span class="a-list-item">Dual USB Output, Two- way Quick Charge</span></li>
<li><span class="a-list-item">Material: Aluminium Alloy + CNC Edge</span></li>
<li class="" data-spm-anchor-id="a2a0e.pdp.product_detail.i0.4bd16c33R4IjnQ">Temperature Resistance</li>
<li class="" data-spm-anchor-id="a2a0e.pdp.product_detail.i1.4bd16c33R4IjnQ">Protection from Short Circuit</li>
<li class="" data-spm-anchor-id="a2a0e.pdp.product_detail.i2.4bd16c33R4IjnQ">Reset Mechanism</li>
</ul>',
                'colors' => '#000000,#808080',
                'price' => 1300,
                'discount' => 1199,
                'tag' => 'Hot',
                'category_id' => 5,
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            15 => 
            array (
                'id' => 22,
                'name' => 'Apple Watch Series 4',
                'image_name' => '1.jpg',
                'description' => '<p>Model - Apple Watch Series 4<br />Watch Dimension - 40 x 34 x 10.7mm<br />Display Size - 1.57"<br />Connectivity - WiFi, Bluetooth, GPS</p>',
                'colors' => '#000000',
                'price' => 44300,
                'discount' => 43999,
                'tag' => 'Hot',
                'category_id' => 8,
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-12',
            ),
            16 => 
            array (
                'id' => 23,
                'name' => 'Mi Amazfit Bip',
                'image_name' => '1.jpg',
                'description' => '<div class="short-description">
<div class="std">Model - Mi Amazfit Bip<br />Display Size - 1.28"<br />Connectivity - WiFi, Bluetooth, GPS</div>
</div>',
                'colors' => '#000000',
                'price' => 6100,
                'discount' => 5999,
                'tag' => 'New',
                'category_id' => 8,
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            17 => 
            array (
                'id' => 24,
                'name' => 'Garmin fenix 5 Sapphire',
                'image_name' => '1.jpg',
                'description' => '<ul>
<li>Display: 1.2&rdquo; (240 x 240)</li>
<li>Display type: Sunlight-visible, transflective memory-in-pixel (MIP)</li>
<li>Memory: 64MB</li>
<li>Lens Material: chemically strengthened glass or sapphire crystal</li>
<li>Bezel Material: Stainless steel</li>
<li>Strap material: silicone</li>
</ul>',
                'colors' => '#000000',
                'price' => 45000,
                'discount' => 43000,
                'tag' => 'Smartwatch',
                'category_id' => 8,
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            18 => 
            array (
                'id' => 25,
                'name' => 'Beats PILL Plus',
                'image_name' => '1.jpg',
                'description' => 'SKU: RAMBPSHSP

Brand: Beats

Active 2-way crossove',
                'colors' => '#000000,#ff0000,#c0c0c0',
                'price' => 21000,
                'discount' => 20000,
                'tag' => 'Speaker',
                'category_id' => 9,
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-12',
            ),
            19 => 
            array (
                'id' => 26,
                'name' => 'JBL Omni 50+',
                'image_name' => '1.jpg',
                'description' => '<p>&lt;h2&gt;Model - JBL by Harman/Kardon Omni 50+&lt;br /&gt;Type - Wireless HD Indoor/Outdoor Speaker with Rechargeable Battery&lt;/h2&gt;</p>',
                'colors' => '#000000',
                'price' => 46730,
                'discount' => 45000,
                'tag' => 'Speaker',
                'category_id' => 9,
                'created_at' => '2019-02-10',
                'updated_at' => '2019-02-12',
            ),
            20 => 
            array (
                'id' => 27,
                'name' => 'Edifier S350DB 2.1',
                'image_name' => '1.jpg',
            'description' => '<p>Model - Edifier S350DB<br />Type - Modern Powered Bluetooth Bookshelf Speaker<br />Channel - 2.1<br />RMS/Channel (Watt) - 15Watt x 2 (Treble) + 25Watt x 2 (midrange and bass)<br />RMS/Subwoofer (Watt) - 70Watt</p>',
                'colors' => '#000000',
                'price' => 31500,
                'discount' => 30000,
                'tag' => 'Speaker',
                'category_id' => 9,
                'created_at' => '2019-02-10',
                'updated_at' => '2019-02-10',
            ),
            21 => 
            array (
                'id' => 28,
                'name' => 'JBL Xtreme 2 Portable',
                'image_name' => '1.jpg',
            'description' => '<p>Model - JBL Xtreme 2<br />Type - Portable Bluetooth Speaker<br />Lithium-ion Polymer 36Wh (Equivalent to 3.7V 10000mAh)<br />Wirelessly connect<br />2 smartphones or tablets<br />charges device via an USB port</p>',
                'colors' => '#400080',
                'price' => 25400,
                'discount' => 24000,
                'tag' => 'Hot',
                'category_id' => 9,
                'created_at' => '2019-02-10',
                'updated_at' => '2019-02-10',
            ),
            22 => 
            array (
                'id' => 30,
                'name' => 'APPLE Magic Mouse 2',
                'image_name' => '1.jpg',
                'description' => '<p>Model - APPLE Magic Mouse 2<br />Type - Magic Mouse<br />Connectivity - Wireless<br />Rechargable</p>',
                'colors' => '#000000',
                'price' => 11050,
                'discount' => 11000,
                'tag' => 'Mouse',
                'category_id' => 10,
                'created_at' => '2019-02-10',
                'updated_at' => '2019-02-10',
            ),
            23 => 
            array (
                'id' => 31,
                'name' => 'Rapoo 3600 Silent',
                'image_name' => '1.jpg',
                'description' => '<ul>
<li>Connection: 2.4GHz Wireless</li>
<li>Tracking method: Optical</li>
<li>Keys amount: 3&nbsp;</li>
<li>Keys travel: 0.8mm</li>
<li>Acceleration: 20G</li>
<li>Resolution: 1000DPI</li>
<li>Voltage: 1.5V</li>
</ul>',
                'colors' => '#000000',
                'price' => 1050,
                'discount' => 999,
                'tag' => 'Mouse',
                'category_id' => 10,
                'created_at' => '2019-02-10',
                'updated_at' => '2019-02-10',
            ),
            24 => 
            array (
                'id' => 34,
                'name' => 'Corsair STRAFE Mechanical',
                'image_name' => '1.jpg',
                'description' => '<p>Model - Corsair STRAFE Mechanical<br />Type - RED LED Backlight Gaming Keyboard<br />Interface - USB</p>',
                'colors' => '#ff0000',
                'price' => 11000,
                'discount' => 10500,
                'tag' => 'Keyboard',
                'category_id' => 10,
                'created_at' => '2019-02-10',
                'updated_at' => '2019-02-10',
            ),
            25 => 
            array (
                'id' => 35,
                'name' => 'APPLE MAGIC KEYBOARD',
                'image_name' => '1.jpg',
            'description' => 'APPLE MAGIC KEYBOARD (MLA22ZA/A, MLA22LL/A)',
                'colors' => '#c0c0c0',
                'price' => 9700,
                'discount' => 9500,
                'tag' => 'Keyboard',
                'category_id' => 10,
                'created_at' => '2019-02-10',
                'updated_at' => '2019-02-10',
            ),
            26 => 
            array (
                'id' => 36,
                'name' => 'MSI GT75VR 7RE TITAN',
                'image_name' => '1.jpg',
                'description' => '<p>Generation - 7th Gen<br />Processor - Intel Core i7 7820HK<br />Processor Clock Speed - 2.90-3.90GHz<br />Display Size - 17.3"<br />RAM - 32GB<br />RAM Type - DDR4 2400MHz<br />Storage - 1TB HDD + 256GB NVMe SSD</p>',
                'colors' => '#808080',
                'price' => 254630,
                'discount' => 245000,
                'tag' => 'Laptop',
                'category_id' => 1,
                'created_at' => '2019-02-10',
                'updated_at' => '2019-02-10',
            ),
            27 => 
            array (
                'id' => 37,
            'name' => 'Asus ROG G752VS(KBL)',
                'image_name' => '1.jpg',
                'description' => '<p>Generation - 7th Gen<br />Processor - Intel Core i7 7700HQ<br />Processor Clock Speed - 2.80GHz<br />Display Size - 17.3"<br />RAM - 32GB<br />RAM Type - DDR4<br />HDD - 2TBHDD+512GB SSD<br />Operating System - Endless</p>',
                'colors' => '#808080',
                'price' => 231420,
                'discount' => 224000,
                'tag' => 'Hot',
                'category_id' => 1,
                'created_at' => '2019-02-10',
                'updated_at' => '2019-02-10',
            ),
            28 => 
            array (
                'id' => 38,
                'name' => 'Microsoft Surface Pro',
                'image_name' => '1.jpg',
                'description' => '<p>Generation - 8th Gen<br />Processor - Intel Core i7 8650U<br />Processor Clock Speed - 1.90-4.20GHz<br />Display Size - 12.3"<br />RAM - 16GB<br />Storage - 512GB SSD<br />Operating System - Windows 10 Home</p>',
                'colors' => '#c0c0c0,#8080ff',
                'price' => 202650,
                'discount' => 195000,
                'tag' => 'Tab',
                'category_id' => 7,
                'created_at' => '2019-02-10',
                'updated_at' => '2019-02-10',
            ),
            29 => 
            array (
                'id' => 39,
                'name' => 'HP Spectre 13-V113TU',
                'image_name' => '1.jpg',
                'description' => '<p>Model - HP Spectre 13-V113TU<br />Processor - Intel Core i5 7200U<br />Generation - 7th Gen<br />Processor Clock Speed - 2.50-3.10GHz<br />Display Size - 13.3"<br />RAM - 8GB<br />RAM Type - LPDDR3 1866 On-Board</p>',
                'colors' => '#000000',
                'price' => 126300,
                'discount' => 123000,
                'tag' => 'New',
                'category_id' => 1,
                'created_at' => '2019-02-10',
                'updated_at' => '2019-02-10',
            ),
            30 => 
            array (
                'id' => 40,
                'name' => 'Asus GL503VM Core i7',
                'image_name' => '1.jpg',
                'description' => '<p>Generation - 7th Gen<br />Processor - Intel Core i7 7700HQ<br />Processor Clock Speed - 2.80GHz<br />Display Size - 15.6"<br />RAM - 16GB<br />RAM Type - DDR4</p>',
                'colors' => '#000000',
                'price' => 157920,
                'discount' => 154500,
                'tag' => 'Laptop',
                'category_id' => 1,
                'created_at' => '2019-02-10',
                'updated_at' => '2019-02-10',
            ),
            31 => 
            array (
                'id' => 41,
                'name' => 'asus zenfone 5z',
                'image_name' => '1.jpg',
                'description' => '<p>Dimensions 153 x 75.7 x 7.9 mm</p>
<p>Weight 155 g (5.47 oz)</p>
<p>Hybrid Dual SIM</p>
<p>DISPLAY Type IPS LCD</p>
<p>Resolution 1080 x 2246 pixels,</p>
<p>18.7:9 ratio (~402 ppi density) OS Android 8.0 (Oreo)</p>
<p>Chipset Qualcomm SDM845 Snapdragon 845</p>
<p>GPU Adreno 630</p>',
                'colors' => '#000000,#c0c0c0',
                'price' => 49000,
                'discount' => 48000,
                'tag' => 'Hot',
                'category_id' => 2,
                'created_at' => '2019-02-10',
                'updated_at' => '2019-02-10',
            ),
            32 => 
            array (
                'id' => 42,
                'name' => 'Skullcandy Over-Ear',
                'image_name' => '1.jpg',
                'description' => '<ul>
<li>Type: Over-Ear</li>
<li>Connection Type: Bluetooth&reg; or Wired</li>
<li>Battery Life: Up to 40 Hours</li>
<li>Rapid Charge: 10 Min = 3 Hours of Play</li>
<li>Noise Isolation: Passive</li>
<li>Driver Size: 40mm</li>
</ul>',
                'colors' => '#000000',
                'price' => 14000,
                'discount' => 13900,
                'tag' => 'Hot',
                'category_id' => 3,
                'created_at' => '2019-02-10',
                'updated_at' => '2019-02-10',
            ),
            33 => 
            array (
                'id' => 43,
                'name' => 'Microlab Outlander',
                'image_name' => '1.jpg',
                'description' => '<ul>
<li>Bluetooth Profiles: HSP, HFP, A2DP, AVRCP</li>
<li>Frequency Response: 20 Hz - 20 kHz&nbsp;&nbsp;</li>
<li>Sound pressure level: 115 &plusmn; 3 dB</li>
<li>Impedance: 32 &Omega;</li>
<li>Wireless Range: 10m</li>
<li>Talk Time: 22H</li>
<li>Standby Time: 900 hours</li>
<li>Music Play Time: 20 hours</li>
</ul>',
                'colors' => '#000000',
                'price' => 9200,
                'discount' => 9100,
                'tag' => 'Speaker',
                'category_id' => 3,
                'created_at' => '2019-02-10',
                'updated_at' => '2019-02-10',
            ),
            34 => 
            array (
                'id' => 44,
                'name' => 'DualShock 4 Wireless',
                'image_name' => '1.jpg',
                'description' => 'SKU HRDDASCPLU

Weight 0.2100

Brand Sony',
                'colors' => '#ff0000',
                'price' => 3699,
                'discount' => 3500,
                'tag' => 'Gaming',
                'category_id' => 6,
                'created_at' => '2019-02-10',
                'updated_at' => '2019-02-10',
            ),
            35 => 
            array (
                'id' => 45,
                'name' => 'Huawei MediaPad T3',
                'image_name' => '1.jpg',
                'description' => '<p>Model - Huawei MediaPad T3 10<br />Processor Type - Qualcomm MSM8917 Quad Core A53<br />RAM - 2GB<br />Processor Speed - 1.4GHz<br />Internal Memory - 16GB ROM<br />Display Type - IPS display<br />Display Size - 9.6"<br />Screen Resolution - 1280 x 800</p>',
                'colors' => '#000000',
                'price' => 19900,
                'discount' => 18900,
                'tag' => 'New',
                'category_id' => 7,
                'created_at' => '2019-02-10',
                'updated_at' => '2019-02-10',
            ),
        ));
        
        
    }
}