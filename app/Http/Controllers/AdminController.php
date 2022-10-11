<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormContact;
use App\Devis;
use App\Rdv;
use App\Admin;
use App\User;
use App\Newsletter;
use App\Article;
use App\Projet;
use App\Temoignage;
use Flashy;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $totalContact = FormContact::all()
                                 ->count();
        $totalDevis = Devis::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalNewsletter = Newsletter::all()
                       ->count();
        $ListeLastDevis = Devis::where('created_at','<=', date('Y-m-d H:i:s'))
                               ->orderBy('created_at','desc')
                               ->paginate(5);
        return view('Admin.adminhome',compact('totalNewsletter','totalRdv','totalDevis','totalContact','ListeLastDevis'));
    }

    public function showAdminContact()
    {
        $totalContact = FormContact::all()
                                 ->count();
        $totalDevis = Devis::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalNewsletter = Newsletter::all()
                       ->count();
        $listeTotalContacts = FormContact::paginate(5);
        return view('Admin.Pages.formscontact',compact('listeTotalContacts','totalContact','totalDevis','totalRdv','totalNewsletter'));
    }

    public function showAdminRdv()
    {
        $totalContact = FormContact::all()
                                 ->count();
        $totalDevis = Devis::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalNewsletter = Newsletter::all()
                       ->count();
        $listeTotalContacts = FormContact::paginate(5);
        $listeTotalRdvs = Rdv::paginate(5);
        return view('Admin.Pages.formsrdv',compact('listeTotalContacts','totalContact','totalDevis','totalRdv','totalNewsletter','listeTotalRdvs'));

    }

    public function showAdmindevis()
    {
        $totalContact = FormContact::all()
                                 ->count();
        $totalDevis = Devis::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalNewsletter = Newsletter::all()
                       ->count();
        $listeTotalContacts = FormContact::paginate(5);
        $listeTotalRdvs = Rdv::paginate(5);
        $listeTotalDevis = Devis::paginate(5);
        return view('Admin.Pages.formsdevis',compact('listeTotalContacts','totalContact','totalDevis','totalRdv','totalNewsletter','listeTotalRdvs','listeTotalDevis'));
    }

    public function showAdminNewsletter()
    {
        $totalContact = FormContact::all()
                                 ->count();
        $totalDevis = Devis::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalNewsletter = Newsletter::all()
                       ->count();
        $listeTotalContacts = FormContact::paginate(5);
        $listeTotalRdvs = Rdv::paginate(5);
        $listeTotalDevis = Devis::paginate(5);
        $listeTotalNewsletters = Newsletter::paginate(5);
        return view('Admin.Pages.formsnewsletter',compact('listeTotalContacts','totalContact','totalDevis','totalRdv','totalNewsletter','listeTotalRdvs','listeTotalDevis','listeTotalNewsletters'));

    }

    public function showAdminArticle()
    {
        $totalContact = FormContact::all()
                                 ->count();
        $totalDevis = Devis::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalNewsletter = Newsletter::all()
                       ->count();
        $listeTotalContacts = FormContact::paginate(5);
        $listeTotalRdvs = Rdv::paginate(5);
        $listeTotalDevis = Devis::paginate(5);
        $listeTotalNewsletters = Newsletter::paginate(5);
        $listeTotalArticles = Article::paginate(5);
        return view('Admin.Pages.formsarticle',compact('listeTotalContacts','totalContact','totalDevis','totalRdv','totalNewsletter','listeTotalRdvs','listeTotalDevis','listeTotalNewsletters','listeTotalArticles'));

    }

    public function showAdminProjet()
    {
        $totalContact = FormContact::all()
                                 ->count();
        $totalDevis = Devis::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalNewsletter = Newsletter::all()
                       ->count();
        $listeTotalContacts = FormContact::paginate(5);
        $listeTotalRdvs = Rdv::paginate(5);
        $listeTotalDevis = Devis::paginate(5);
        $listeTotalNewsletters = Newsletter::paginate(5);
        $listeTotalProjets = Projet::paginate(5);
        return view('Admin.Pages.formsprojet',compact('listeTotalContacts','totalContact','totalDevis','totalRdv','totalNewsletter','listeTotalRdvs','listeTotalDevis','listeTotalNewsletters','listeTotalProjets'));

    }

    public function showAdminTemoignage()
    {
        $totalContact = FormContact::all()
                                 ->count();
        $totalDevis = Devis::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalNewsletter = Newsletter::all()
                       ->count();
        $listeTotalContacts = FormContact::paginate(5);
        $listeTotalRdvs = Rdv::paginate(5);
        $listeTotalDevis = Devis::paginate(5);
        $listeTotalNewsletters = Newsletter::paginate(5);
        $listeTotalTemoignages = Temoignage::paginate(5);
        return view('Admin.Pages.formstemoignages',compact('listeTotalContacts','totalContact','totalDevis','totalRdv','totalNewsletter','listeTotalRdvs','listeTotalDevis','listeTotalNewsletters','listeTotalTemoignages'));
    }

    public function StoreArticle(Request $request)
    {
        $request->validate([

        'nomarticle' => 'required|min:5',
        'prixarticle' => 'required',
        'categorie' => 'required',
        'image' => 'image'
      ],

      [
        'nomarticle.required' => 'Ce champ est obligatoire',
        'nomarticle.min' => 'Ce champ doit contenir plus de 5 caratères',
        'prixarticle.required' => 'Ce champ est obligatoire',
        'categorie' => 'Ce champ est obligatoire',
        'image.image' => 'Entrez une image Svp !',
      ]

     );
       
       $article = new Article;
       $article->nomarticle = $request->input('nomarticle');
       $article->prixarticle = $request->input('prixarticle');
       $article->categorie = $request->input('categorie');
       if($request->hasfile('image'))
       {
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/article/', $filename);
         $article->image = $filename;
       }
         $article->save();
         Flashy::success('Votre Article a été ajouté a votre plateforme !');
         return back();
    }

      public function StoreProjet(Request $request)
    {
        $request->validate([

        'titre' => 'required|min:5',
        'descriptifprojet' => 'required|min:5',
        'image' => 'image'
      ],

      [
        'titre.required' => 'Ce champ est obligatoire',
        'titre.min' => 'Ce champ doit contenir plus de 5 caratères',
        'descriptifprojet.required' => 'Ce champ est obligatoire',
        'descriptifprojet.min' => 'Ce champ doit contenir plus de 5 caratères',
        'image.image' => 'Entrez une image Svp !',
      ]

     );
       
       $projet = new Projet;
       $projet->titre = $request->input('titre');
       $projet->descriptifprojet = $request->input('descriptifprojet');
       if($request->hasfile('image'))
       {
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/projet/', $filename);
         $projet->image = $filename;
       }
         $projet->save();
         Flashy::success('Le projet a été ajouté a votre plateforme !');
         return back();
    }

      public function StoreTemoignage(Request $request)
    {
        $request->validate([

        'nom' => 'required|min:5',
        'provenance' => 'required|min:5',
        'message' => 'required|min:5',
        'image' => 'image'
      ],

      [
        'nom.required' => 'Ce champ est obligatoire',
        'nom.min' => 'Ce champ doit contenir plus de 5 caratères',
        'provenance.required' => 'Ce champ est obligatoire',
        'provenance.min' => 'Ce champ doit contenir plus de 5 caratères',
        'message.required' => 'Ce champ est obligatoire',
        'message.min' => 'Ce champ doit contenir plus de 5 caratères',
        'image.image' => 'Entrez une image Svp !',
      ]

     );
       
       $temoignage = new Temoignage;
       $temoignage->nom = $request->input('nom');
       $temoignage->provenance = $request->input('provenance');
       $temoignage->message = $request->input('message');
       if($request->hasfile('image'))
       {
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/temoignage/', $filename);
         $temoignage->image = $filename;
       }
         $temoignage->save();
         Flashy::success('Le temoignage a été ajouté a votre plateforme !');
         return back();
    }

    public function EditAdminArticle($id)
    {
      $totalContact = FormContact::all()
                                 ->count();
        $totalDevis = Devis::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalNewsletter = Newsletter::all()
                       ->count();
        $listeTotalContacts = FormContact::paginate(5);
        $listeTotalRdvs = Rdv::paginate(5);
        $listeTotalDevis = Devis::paginate(5);
        $listeTotalNewsletters = Newsletter::paginate(5);
        $listeTotalTemoignages = Temoignage::paginate(5);
        $article = Article::find($id);
        return view('Admin.PageEdit.articleedit',compact('listeTotalContacts','totalContact','totalDevis','totalRdv','totalNewsletter','listeTotalRdvs','listeTotalDevis','listeTotalNewsletters','listeTotalTemoignages','article'));
    }

       public function EditAdminProjet($id)
    {
      $totalContact = FormContact::all()
                                 ->count();
        $totalDevis = Devis::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalNewsletter = Newsletter::all()
                       ->count();
        $listeTotalContacts = FormContact::paginate(5);
        $listeTotalRdvs = Rdv::paginate(5);
        $listeTotalDevis = Devis::paginate(5);
        $listeTotalNewsletters = Newsletter::paginate(5);
        $listeTotalTemoignages = Temoignage::paginate(5);
        $projet = Projet::find($id);
        return view('Admin.PageEdit.projetedit',compact('listeTotalContacts','totalContact','totalDevis','totalRdv','totalNewsletter','listeTotalRdvs','listeTotalDevis','listeTotalNewsletters','listeTotalTemoignages','projet'));
    }

        public function EditAdminTemoignage($id)
    {
      $totalContact = FormContact::all()
                                 ->count();
        $totalDevis = Devis::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalNewsletter = Newsletter::all()
                       ->count();
        $listeTotalContacts = FormContact::paginate(5);
        $listeTotalRdvs = Rdv::paginate(5);
        $listeTotalDevis = Devis::paginate(5);
        $listeTotalNewsletters = Newsletter::paginate(5);
        $listeTotalTemoignages = Temoignage::paginate(5);
        $temoignage = Temoignage::find($id);
        return view('Admin.PageEdit.temoignageedit',compact('listeTotalContacts','totalContact','totalDevis','totalRdv','totalNewsletter','listeTotalRdvs','listeTotalDevis','listeTotalNewsletters','listeTotalTemoignages','temoignage'));
    }

    public function updateprojet(Request $request, $id)
    {
         $request->validate([

        'titre' => 'required|min:5',
        'descriptifprojet' => 'required|min:5',
        'image' => 'image'
      ],

      [
        'titre.required' => 'Ce champ est obligatoire',
        'titre.min' => 'Ce champ doit contenir plus de 5 caratères',
        'descriptifprojet.required' => 'Ce champ est obligatoire',
        'descriptifprojet.min' => 'Ce champ doit contenir plus de 5 caratères',
        'image.image' => 'Entrez une image Svp !',
      ]

     );

      $projet = Projet::find($id);
      $projet->titre = $request->input('titre');
      $projet->descriptifprojet = $request->input('descriptifprojet');
       if($request->hasfile('image'))
       {
         $destination = 'uploads/projet'.$projet->image;
             if(File::exists($destination))
             {
               File::delete($destination); 
             }
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/projet/', $filename);
         $projet->image = $filename;
       }
         $projet->update();
         Flashy::success("Votre Projet a été modifié avec succès !");
         return back();
    }

    public function updatearticle(Request $request, $id)
    {
           $request->validate([

        'nomarticle' => 'required|min:5',
        'prixarticle' => 'required',
        'categorie' => 'required',
        'image' => 'image'
      ],

      [
        'nomarticle.required' => 'Ce champ est obligatoire',
        'nomarticle.min' => 'Ce champ doit contenir plus de 5 caratères',
        'prixarticle.required' => 'Ce champ est obligatoire',
        'categorie' => 'Ce champ est obligatoire',
        'image.image' => 'Entrez une image Svp !',
      ]

     );

      $article = Article::find($id);
      $article->nomarticle = $request->input('nomarticle');
      $article->prixarticle = $request->input('prixarticle');
      $article->categorie = $request->input('categorie');
       if($request->hasfile('image'))
       {
         $destination = 'uploads/article'.$article->image;
             if(File::exists($destination))
             {
               File::delete($destination); 
             }
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/article/', $filename);
         $article->image = $filename;
       }
         $article->update();
         Flashy::success("Votre Projet a été modifié avec succès !");
         return back();
    }

     public function updatetemoignage(Request $request, $id)
    {
            $request->validate([

        'nom' => 'required|min:5',
        'provenance' => 'required|min:5',
        'message' => 'required|min:5',
        'image' => 'image'
      ],

      [
        'nom.required' => 'Ce champ est obligatoire',
        'nom.min' => 'Ce champ doit contenir plus de 5 caratères',
        'provenance.required' => 'Ce champ est obligatoire',
        'provenance.min' => 'Ce champ doit contenir plus de 5 caratères',
        'message.required' => 'Ce champ est obligatoire',
        'message.min' => 'Ce champ doit contenir plus de 5 caratères',
        'image.image' => 'Entrez une image Svp !',
      ]

     );

      $temoignage = Temoignage::find($id);
      $temoignage->nom = $request->input('nom');
      $temoignage->provenance = $request->input('provenance');
      $temoignage->message = $request->input('message');
       if($request->hasfile('image'))
       {
         $destination = 'uploads/temoignage'.$temoignage->image;
             if(File::exists($destination))
             {
               File::delete($destination); 
             }
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/temoignage/', $filename);
         $temoignage->image = $filename;
       }
         $temoignage->update();
         Flashy::success("Le temoignage a été modifié avec succès !");
         return back();
    }

        public function DeleteAdminRdv($id)
    {
      $adminrdv = Rdv::find($id);
      $adminrdv->delete();
      Flashy::error("Le Rendez vous a été supprimé !");
      return back();
    }

      public function DeleteAdminDevis($id)
    {
      $admindevis = Devis::find($id);
      $admindevis->delete();
      Flashy::error("La demande de Devis a été supprimé !");
      return back();
    }

     public function DeleteAdminContact($id)
    {
      $admincontact = FormContact::find($id);
      $admincontact->delete();
      Flashy::error("Le contact a été supprimé !");
      return back();
    }

     public function DeleteAdminNewsletter($id)
    {
      $adminnewsletter = Newsletter::find($id);
      $adminnewsletter->delete();
      Flashy::error("L'email à la souscription a été supprimé !");
      return back();
    }

    public function DeleteAdminArticle($id)
    {
      $adminarticle = Article::find($id);
      $adminarticle->delete();
      Flashy::error("L'article a été supprimé !");
      return back();
    }

    public function DeleteAdminProjet($id)
    {
      $adminprojet = Projet::find($id);
      $adminprojet->delete();
      Flashy::error("Le projet a été supprimé !");
      return back();
    }

    public function DeleteAdminTemoignage($id)
    {
      $admintemoignage = Temoignage::find($id);
      $admintemoignage->delete();
      Flashy::error("Le temoignage a été supprimé !");
      return back();
    }
}
