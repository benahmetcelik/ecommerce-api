<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class GenerateBaseMC extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:mcr';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Base Model and Controller Generator';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $names = [
            "Address",
            "Vendor",
            "Order",
            "Payment",
            "Category",
            "Product",
            "Tax",
            "Variant",
            "Option",
            "Brand",
            "Card",
            "CreditCard",
            "Favorite",
            "Comment",
            "Wallet",
            "Refund",
            "Coupon",
            "FAQ",
            "Slider",
            "Blog",
            "Permission",
            "Role",
            "Newsletter",
            "EMailTemplate",
            "SupportTicket",
            "SellerAplication"
        ];
        foreach ($names as $name) {
            Artisan::call("make:service $name");
//            Artisan::call("make:resource $name -mcr");
        }
    }
}
