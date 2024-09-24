<?php

namespace App\Controllers;
use App\Models\SurveyModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('header') . view('index');
    }
    public function Survey(): string
    {
        return view('survey');
    }

    public function Overview(): string
    {
        return view('header') . view('overview');
    }

    public function OurInspiration(): string
    {
        return view('header') . view('our_inspiration');
    }
    public function VisionAndMission(): string
    {
        return view('header') . view('vision_and_mission');
    }

    public function TargetAudience(): string
    {
        return view('header') . view('target_audience');
    }

    public function NewRetirementTrends(): string
    {
        return view('header') . view('new_retirement_trends');
    }

    public function ProposedProject(): string
    {
        return view('header') . view('proposed_project');
    }

    public function ServicesAndFacilities(): string
    {
        return view('header') . view('services_and_facilities');
    }

    public function PlanAndElevation(): string
    {
        return view('header') . view('plan_and_elevation');
    }

    public function ProjectLayoutAndFeatures(): string
    {
        return view('header') . view('project_layout_and_features');
    }

    public function CollaborationOptions(): string
    {
        return view('header') . view('collaboration_options');
    }

    public function SubmitSurvey(){

        $json = $this->request->getJSON();


        if (!$json) {
            
            return $this->response->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST)
                ->setJSON(['error' => 'Invalid input']);
        }
        

        // Load the SurveyModel
        $surveyModel = new SurveyModel();
        

            // Define the data array
    $data = [
        'who_are_you' => $json->whoAreYou,
        'first_name' => $json->firstName,
        'last_name' => $json->lastName,
        'gender' => $json->gender,
        'nationality' => $json->nationality,
        'age' => $json->age,
        'phone' => $json->phone,
        'email' => $json->email,
        'designation' => $json->designation,
        'current_residential_location' => $json->currentLocation,
        'hometown' => $json->hometown,
        'project_location' => $json->projectLocation,
        'interested_district' => $json->interestedDistrict,
        'distance_from_city' => $json->distanceFromCity,
        'house_type' => $json->houseType,
        'farm_type' => $json->farmType,
        'farm_acres' => $json->acres,
        'farm_facility_management' => $json->facilityManagement,
        'farm_additional_services' => $json->additionalServices,
        'villa_bedrooms' => $json->bedrooms,
        'villa_sqft' => $json->squareFeet,
        'villa_master_bedroom_size' => $json->masterBedroomSize,
        'villa_living_room_size' => $json->livingRoomSize,
        'villa_bedroom_size' => $json->bedroomSize,
        'villa_bathroom_size' => $json->bathroomSize,
        'villa_swimming_pool' => $json->swimmingPool,
        'villa_pool_size' => $json->poolSize,
        'villa_facility_management' => $json->facilityManagementVilla,
        'villa_site_visiting' => $json->siteVisiting,
        'villa_online_booking' => $json->onlineBooking,
        'villa_real_time_monitoring' => $json->realTimeMonitoring,
        'resort_type' => $json->resortType,
        'resort_camp_site' => $json->campSite,
        'resort_pub' => $json->pub,
        'resort_bar' => $json->bar,
        'resort_open_restaurant' => $json->restaurant,
        'resort_additional_suggestions' => $json->additionalSuggestions,
        'resort_yoga_meditations' => $json->yogaMeditations,
        'resort_indoor_games' => $json->indoorGames,
        'resort_other_suggestions' => $json->otherSuggestions,
        'wellness_park_facilities' => $json->wellnessFacilities,
        'smart_home_facility' => $json->smartHome,
        'other_facilities' => $json->otherFacilities,
        'budget_range' => $json->budgetRange,
        'family_members' => $json->familyMembers,
        'additional_income' => $json->additionalIncome,
        'income_sources' => $json->incomeType,
        'updated_at' => date('Y-m-d H:i:s'),
    ];
    
        

        if ($surveyModel->insert($data)) {
            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setStatusCode(ResponseInterface::HTTP_INTERNAL_SERVER_ERROR)
                ->setJSON(['success' => false, 'error' => 'Failed to save data']);
        }
    }

    public function StrategicImportance(): string
    {
        return view('header') . view('strategic_importance');
    }

    public function CanalSystem(): string 
    {
        return view('header') . view('canal_system');
    }

    public function NestEcoCity(): string 
    {
        return view('header') . view('nest_eco_city');
    }

    public function TechnologyInnovation(): string 
    {
        return view('header') . view('technology_innovation');
    }

    public function RenewableEnergy(): string 
    {
        return view('header') . view('renewable_energy');
    }

    public function WaterResourceManagement(): string 
    {
        return view('header') . view('water_resource_management');
    }
    
    public function EnvironmentalProtection(): string 
    {
        return view('header') . view('environmental_protection');
    }
    public function WhyInvest(): string 
    {
        return view('header') . view('why_invest');
    }
    public function FinancialProjections(): string 
    {
        return view('header') . view('financial_projections');
    }
    
    public function InvestorBenefits(): string 
    {
        return view('header') . view('investor_benefits');
    }

    public function JobCreation(): string 
    {
        return view('header') . view('job_creation');
    }
    public function CommunityDevelopment(): string 
    {
        return view('header') . view('community_development');
    }
    public function EconomicGrowth(): string 
    {
        return view('header') . view('economic_growth');
    }

    public function StrategicPartners(): string 
    {
        return view('header') . view('strategic_partners');
    }
    public function PublicPrivatePartnerships(): string 
    {
        return view('header') . view('public_private_partnerships');
    }
    public function InternationalCollaboration(): string 
    {
        return view('header') . view('international_collaboration');
    }

}
