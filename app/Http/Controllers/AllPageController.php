<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormContact;
use App\Rdv;
use App\Devis;
use App\Newsletter;
use App\Projet;
use App\Temoignage;
use App\Article;
use Flashy;

class AllPageController extends Controller
{
    public function ShowAbout()
    {
        return view('Pages.a-propos');
    }
    public function ShowContact()
    {
        return view('Pages.contact');
    }
    public function ShowConstruction()
    {
        $totalProjets = Projet::paginate(6);
        $totalTemoignages = Temoignage::paginate(6);
        return view('Pages.locationetgestion',compact('totalProjets','totalTemoignages'));
    }
    public function ShowCiment()
    {
        $totalArticles = Article::paginate(6);
        $totalCategories = Article::groupBy('categorie')
                                    ->orderBy('categorie','asc')
                                    ->get();
        $totals = Article::all()
                         ->count();
        return view('Pages.ventemateriaux',compact('totalArticles','totalCategories','totals'));
    }
    public function ShowDevis()
    {
        return view('Pages.devis');
    }
    public function ShowRdv()
    {
        return view('Pages.rdv');
    }

    function sendformcontact(Request $request){

        $request->validate([
          'nom'=>'required|min:5',
          'email'=>'required|email',
          'services'=>'required',
          'message'=>'required'
        ],

        [
         'nom.required'=>'Entrez votre nom svp !',
         'nom.min'=>'Ce champ doit comporter plus de 5 caractères',
         'email.required'=>'Entrez une adresse email !',
         'services.required'=>'Choisissez un service !',
         'message.required'=>'Saisissez votre message',
        ]

    );
        $createcontact = new Formcontact([
            'nom'=>$request->get('nom'),
            'email'=>$request->get('email'),
            'services'=>$request->get('services'),
            'message'=>$request->get('message'),
        ]);
        $createcontact->save();
        Flashy::success('Votre message a été envoyé !');
        return redirect()->route('path_contact');
    }

    function sendrdv(Request $request)
    {
        $request->validate([
           
         'nom' => 'required|min:5',
         'identite' => 'required',
         'contact' => 'required|digits:10',
         'emailrdv' => 'required|email',
         'daterdv' => 'required',
         'heurerdv' => 'required',
         'service' => 'required',
         'message' => 'required'
        ],

        [
            'nom.required' => 'Ce champ est obligatoire',
            'nom.min' => 'Ce champ doit contenir plus de 5 caratères',
            'identite.required' => 'Ce champs est obligatoire',
            'contact.required' => 'Ce champ est obligatoire',
            'contact.digits' => 'Ce champ doit comporter 10 valeurs numériques',
            'emailrdv.required' => 'Ce champ est obligatoire',
            'emailrdv.email' => 'Entrez une adresse email valide',
            'daterdv.required' => 'Ce champ est obligatoire',
            'heurerdv.required' => 'Ce champ est obligatoire',
            'service.required' => 'Ce champ est obligatoire',
            'message.required' => 'Ce champ est obligatoire',

        ]

    );

        $createrdv = new Rdv([
         
          'nom' => $request->get('nom'),
          'identite' => $request->get('identite'),
          'contact' => $request->get('contact'),
          'emailrdv' => $request->get('emailrdv'),
          'daterdv' => $request->get('daterdv'),
          'heurerdv' => $request->get('heurerdv'),
          'service' => $request->get('service'),
          'message' => $request->get('message'),

        ]);

        $createrdv->save();
        Flashy::success('Votre prise de rendez vous a été envoyé !');
        return back();

    }

    function senddevis(Request $request)
    {
        $request->validate([
          
          'nom'=> 'required|min:5',
          'identite'=> 'required',
          'contact'=>'required|digits:10',
          'emaildevis'=>'required|email',
          'service'=>'required',
          'message'=>'required'

        ],

        [
            'nom.required' => 'Ce champ est obligatoire',
            'nom.min' => 'Ce champ doit contenir plus de 5 caratères',
            'identite.required' => 'Ce champ est obligatoire',
            'contact.required' => 'Ce champ est obligatoire',
            'contact.digits' => 'Ce champ doit comporter 10 valeurs numériques',
            'emaildevis.required' => 'Ce champ est obligatoire',
            'emaildevis.email' => 'Entrez une adresse email valide',
            'service.required' => 'Ce champ est obligatoire',
            'message.required' => 'Ce champ est obligatoire',
        ]

    );
        $creatdedevis = new Devis([
          
          'nom' => $request->get('nom'),
          'identite' => $request->get('identite'),
          'contact' => $request->get('contact'),
          'emaildevis' => $request->get('emaildevis'),
          'service' => $request->get('service'),
          'message' => $request->get('message'),

        ]);

        $creatdedevis->save();
        Flashy::success('Votre demande de devis a été envoyé !');
        return back();
    }

    function sendnewsletter(Request $request)
    {
      $request->validate([
        'emailnews'=>'required|email',
      ],

      [
        'emailnews.required' => 'Ce champ est obligatoire',
      ]

      );

      $createnewsletter = new Newsletter([

        'emailnews'=>$request->get('emailnews'),

      ]);

      $createnewsletter->save();
      Flashy::success('Merci de vous abonner !');
      return back();
    }
}
