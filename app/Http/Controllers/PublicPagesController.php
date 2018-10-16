<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPagesController extends Controller
{
    
    public function getIndex()
    {
        return view('front.pages.index');
    }
    
    public function getAboutUs()
    {
        return view('front.pages.aboutus');
    }
    
    public function getEstablishment()
    {
        return view('front.pages.establishment');
    }
    
    public function getVision()
    {
        return view('front.pages.vision');
    }
    
    public function getMission()
    {
        return view('front.pages.mission');
    }
    
    public function getObjectives()
    {
        return view('front.pages.objectives');
    }
    
    public function getStatement()
    {
        return view('front.pages.statement');
    }
    
    public function getLegalStatus()
    {
        return view('front.pages.legalstatus');
    }
    
    public function getGeneralBody()
    {
        return view('front.pages.generalbody');
    }
    
    public function getExecutiveBody()
    {
        return view('front.pages.executivebody');
    }
    
    public function getOngoingProjects()
    {
        return view('front.pages.ongoingprojects');
    }
    
    public function getImplementedProjects()
    {
        return view('front.pages.ImplementedProjects');
    }
    
    public function getStaff()
    {
        return view('front.pages.staff');
    }
    
    
    public function getPUBLICATIONS()
    {
        return view('front.pages.PUBLICATIONS');
    }
    
    public function getAnnualReport()
    {
        return view('front.pages.annual_report');
    }
    
    public function getGovProcedures()
    {
        return view('front.pages.gov_procedures');
    }
    
    public function getContacts()
    {
        return view('front.pages.contacts');
    }
    
    public function getCorporateOffice()
    {
        return view('front.pages.CorporateOffice');
    }
    
    public function getProjectOffice()
    {
        return view('front.pages.ProjectOffice');
    }
    
    public function getGALLERY()
    {
        return view('front.pages.gallery');
    }
    
    public function getOrganization()
    {
        return view('front.pages.Organization');
    }
    
    public function getProjectGallery()
    {
        return view('front.pages.ProjectGallery');
    }
    
    public function getWorkWithUs()
    {
        return view('front.pages.work_with_us');
    }
    
    public function getVolunteer()
    {
        return view('front.pages.Volunteer');
    }
    
    public function getNoticeBord()
    {
        return view('front.pages.NoticeBord');
    }
    
    public function getAccenture()
    {
        return view('front.pages.accenture');
    }
    
    public function getTvet()
    {
        return view('front.pages.tvet');
    }
    
    
}

