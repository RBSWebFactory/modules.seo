<?php
list($sitemapId, $tmpFile, $modelName, $offset, $chunkSize) = $_POST['argv'];

$sitemap = seo_persistentdocument_sitemap::getInstanceById($sitemapId);
$lang = $sitemap->getWebsiteLang();
RequestContext::getInstance()->setLang($lang);
$website = $sitemap->getWebsite();
website_WebsiteModuleService::getInstance()->setCurrentWebsite($website);
echo seo_SitemapService::getInstance()->appendUrl($sitemap, $tmpFile, $modelName, $offset, $chunkSize);