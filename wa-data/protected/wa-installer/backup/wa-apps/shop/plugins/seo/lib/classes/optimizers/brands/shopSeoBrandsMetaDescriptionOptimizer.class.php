<?php

class shopSeoBrandsMetaDescriptionOptimizer extends shopSeoMetaDescriptionOptimizer
{
    public function __construct()
    {
        parent::__construct();
        $this->brand_response = new shopSeoBrandResponse();
    }

    protected function preCheck()
    {
        if ($this->brand_response->isExists())
        {
            $brand_description = $this->brand_response->getMetaDescription();

            return empty($brand_description);
        }

        return empty($title);
    }

    protected function getTemplate()
    {
        $routing = new shopSeoRouting();
        $current_storefront = $routing->getCurrentStorefront();
        $general_storefront = shopSeoRouting::GENERAL_STOREFRONT_NAME;

        $settings = new shopSeoSettings();
        $template = new shopSeoTemplate();

        foreach (array($current_storefront, $general_storefront) as $storefront)
        {
            $_settings = $settings->get($storefront);
            $template->setEnable($_settings['brands_enable']);
            $template->setContent($_settings['brands_meta_description']);

            if (!$template->isEmpty())
            {
                return $template->getContent();
            }
        }

        return '';
    }

    protected function getReplacer()
    {
        return new shopSeoBrandsReplacesSet();
    }

    private $brand_response;
}