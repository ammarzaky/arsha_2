<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Clint;
use App\Models\Massage;
use App\Models\portfolio;
use App\Models\Service;
use App\Models\Team;
use App\Models\Question;
use App\Models\contact;
use App\Models\Pricing;
use App\Models\PService;
use App\Models\skill;
use App\Models\type;


class HomeController extends Controller
{
    public function index()
    {

        $clints = clint::all();
        $type = DB::table('types')->where('possition', 'Home')->first();
        return view('user.index', compact('clints', 'type'));
    }

    public function about()
    {
        $questions = Question::all();
        $skills = skill::all();
        $aboute_L = DB::table('types')->where('possition', 'aboute_L')->first();
        $aboute_questions = DB::table('types')->where('possition', 'aboute_questions')->first();
        $aboute_skills = DB::table('types')->where('possition', 'aboute_skills')->first();

        return view('user.about', compact('skills', 'questions', 'aboute_L', 'aboute_questions', 'aboute_skills'));
    }

    public function services()
    {
        $services = Service::all();
        $service = DB::table('types')->where('possition', 'service')->first();
        $service_call = DB::table('types')->where('possition', 'service_call')->first();

        return view('user.services', compact('services', 'service', 'service_call'));
    }

    public function contact()
    {
        $contacts = Contact::all();
        $questions = question::all();
        $type = DB::table('types')->where('possition', 'contact')->first();
        $type_question = DB::table('types')->where('possition', 'contact_question')->first();

        return view('user.contact', compact('questions', 'contacts', 'type', 'type_question'));
    }
    public function portfolio()
    {
        $portfolio = portfolio::all();
        $categorise = DB::table('portfolios')->select('catigories')->distinct()->get();
        $portfolio_t = DB::table('types')->where('possition', 'portfolio')->first();

        return view('user.portfolio', compact('portfolio', 'categorise', 'portfolio_t'));
    }
    public function team()
    {
        $team = team::all();
        $pricing = Pricing::all();
        $pservice = PService::all();
        $type =         DB::table('types')->where('possition', 'team')->first();
        $typePrice  =  DB::table('types')->where('possition', 'pricing')->first();

        return view('user.team', compact('team', 'pricing', 'pservice', 'type', 'typePrice'));
    }

    public function inner()
    {
        return view('user.inner');
    }

    public function portfolio_details()
    {
        return view('user.portfolio_details');
    }

    public function contacts()
    {
        $contacts = contact::all();
        return $contacts;
    }
}