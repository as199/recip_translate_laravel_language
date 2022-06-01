<?php
namespace Atpro\Translate\Tests;

use Atpro\Translate\service\TranslateService;
use PHPUnit\Framework\TestCase;

class TranslateServiceTest extends TestCase
{
    protected TranslateService $translateService;

    public function __construct()
    {
        parent::__construct();
        $this->translateService = new TranslateService();
    }

    public function test_is_create_directory()
    {

        $this->translateService->makeDirectory(dirname(__DIR__, 2).'/lang');
        $this->assertDirectoryExists(dirname(__DIR__, 2).'/lang');
    }

    public function test_contains_words()
    {
        $chaine = 'The :attribute must be greater than :value characters.';
       $res = $this->translateService->containsWords($chaine);
        $this->assertEquals('The :a must be greater than :v characters.',$res);
    }

    public function test_replace_words()
    {
        $chaine = 'The :a must be greater than :v characters.';
        $res = $this->translateService->replaceWords($chaine);
        $this->assertEquals('The :attribute  must be greater than :value  characters.',$res);
    }
}