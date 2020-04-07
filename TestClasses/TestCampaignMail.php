<?php

namespace Spatie\Mailcoach\Tests\TestClasses;

use Faker\Generator;
use Spatie\Mailcoach\Mails\CampaignMail;

class TestCampaignMail extends CampaignMail
{

  public $viewHtml;


  /**
   * Create a new TestCampaignMail instance.
   *
   * @return void
   */
  public function __construct()
  {
    $faker = app(Generator::class);

    $this->viewHtml = $faker->randomHtml();
  }

  public function build()
  {
      return $this->html($this->viewHtml);
  }

}
