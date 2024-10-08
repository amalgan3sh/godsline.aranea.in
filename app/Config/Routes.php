<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/survey', 'Home::Survey');
$routes->post('/submit_survey', 'Home::SubmitSurvey');
$routes->get('/overview', 'Home::Overview');
$routes->get('/our_inspiration', 'Home::OurInspiration');
$routes->get('/strategic_importance', 'Home::StrategicImportance');
$routes->get('/vision_and_mission', 'Home::VisionAndMission');
$routes->get('/target_audience', 'Home::TargetAudience');
$routes->get('/new_retirement_trends', 'Home::NewRetirementTrends');
$routes->get('/proposed_project', 'Home::ProposedProject');
$routes->get('/services_and_facilities', 'Home::ServicesAndFacilities');
$routes->get('/plan_and_elevation', 'Home::PlanAndElevation');
$routes->get('/project_layout_and_features', 'Home::ProjectLayoutAndFeatures');
$routes->get('/collaboration_options', 'Home::CollaborationOptions');


$routes->get('/canal_system', 'Home::CanalSystem');
$routes->get('/nest_eco_city', 'Home::NestEcoCity');
$routes->get('/technology_innovation', 'Home::TechnologyInnovation');
$routes->get('/renewable_energy', 'Home::RenewableEnergy');
$routes->get('/water_resource_management', 'Home::WaterResourceManagement');
$routes->get('/environmental_protection', 'Home::EnvironmentalProtection');
$routes->get('/why_invest', 'Home::WhyInvest');
$routes->get('/financial_projections', 'Home::FinancialProjections');
$routes->get('/investor_benefits', 'Home::InvestorBenefits');
$routes->get('/job_creation', 'Home::JobCreation');
$routes->get('/community_development', 'Home::CommunityDevelopment');
$routes->get('/economic_growth', 'Home::EconomicGrowth');
$routes->get('/strategic_partners', 'Home::StrategicPartners');
$routes->get('/public_private_partnerships', 'Home::PublicPrivatePartnerships');
$routes->get('/international_collaboration', 'Home::InternationalCollaboration');


$routes->post('/submit_contact', 'Home::Contactsubmit'); 
$routes->get('/contact_us', 'Home::ContactUs');

$routes->post('/subscription/subscribe', 'Home::Subscribe');
