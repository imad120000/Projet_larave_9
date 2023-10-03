<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index()
    {
        //Another methode de get totale anomalies

        /*  $Total_anomalies =  DB::table('mantis_bug_tables')
            ->select(DB::raw('count(*) as Total_anomalies'), 'project_id')
            ->groupBy('project_id')
            ->orderByDesc('Total_anomalies')
            ->get();
         */

        $projects = ['Projet 1 CLI', 'Projet 2 CLI', 'Projet 3 CLI'];
        $projectCounts = [];
        $bugsencour = [];
        $amlencour = [];
        $projectIds = [1, 2, 3];
        $categoryId = 2; // Categorie : BUGS
        $categoryIdo = 3; // Categorie : Améliorations

        //Get the Totale Anomalies
        foreach ($projects as $projectName) {
            $projectId = DB::table('mantis_project_tables')
                ->where('name', $projectName)
                ->value('id');

            $projectCount = DB::table('mantis_bug_tables')
                ->where('project_id', $projectId)
                ->count();

            $projectCounts[$projectName] = $projectCount;
        }

        //Get Number of bugs for each projet (En cours & Resolu)
        foreach ($projectIds as $projectId) {

            $bugsencour[] = DB::table('mantis_bug_tables')
                ->select('mantis_bug_tables.status as BUGSE')
                ->where('category_id', $categoryId)
                ->where('project_id', $projectId)
                ->whereNotIn('status', [80, 90])
                ->get();

            $bugseresolu[] = DB::table('mantis_bug_tables')
                ->select('mantis_bug_tables.status as BUGSE')
                ->where('category_id', $categoryId)
                ->where('project_id', $projectId)
                ->whereIn('status', [80, 90])
                ->get();
        }

        //Get Number of Améliorations for each projet (En cours & Resolu)
        foreach ($projectIds as $projectId) {

            $amlencour[] = DB::table('mantis_bug_tables')
                ->select('status as aml')
                ->where('category_id', $categoryIdo)
                ->where('project_id', $projectId)
                ->whereNotIn('status', [80, 90])
                ->get();

            $amlresolu[] = DB::table('mantis_bug_tables')
                ->select('status as aml')
                ->where('category_id', $categoryIdo)
                ->where('project_id', $projectId)
                ->whereIn('status', [80, 90])
                ->get();
        }

        return view('welcome', [
            'projectCounts' => $projectCounts,
            'bugsencour' => $bugsencour,
            'bugseresolu' => $bugseresolu,
            'amlencour' => $amlencour,
            'amlresolu' => $amlresolu,
        ]);
    }
}
