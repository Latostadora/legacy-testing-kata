<?php

namespace Quotebot;

class Application
{
    /** main application method */
    public static function main(array $args = null)
    {
        $bot = new AutomaticQuoteBot(
            new BlogAuctionTask(
                new MarketStudy(),
                new Publisher(),
                new TimeService()
            )
        );
        $bot->sendAllQuotes('FAST');
    }
}
