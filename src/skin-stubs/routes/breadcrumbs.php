<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('example.dashboard.default'));
});
// Dashboard > Default
Breadcrumbs::for('dashboard.default', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Default', route('example.dashboard.default'));
});
// Dashboard > eCommerce
Breadcrumbs::for('dashboard.ecommerce', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('eCommerce', route('example.dashboard.ecommerce'));
});
// Dashboard > Projects
Breadcrumbs::for('dashboard.projects', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Projects', route('example.dashboard.projects'));
});
// Dashboard > Online Courses
Breadcrumbs::for('dashboard.online-courses', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Online Courses', route('example.dashboard.online-courses'));
});
// Dashboard > Marketing
Breadcrumbs::for('dashboard.marketing', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Marketing', route('example.dashboard.marketing'));
});
// Dashboard > Bidding
Breadcrumbs::for('dashboard.bidding', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Bidding', route('example.dashboard.bidding'));
});
// Dashboard > POS System
Breadcrumbs::for('dashboard.pos', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('POS System', route('example.dashboard.pos'));
});
// Dashboard > Call Center
Breadcrumbs::for('dashboard.call-center', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Call Center', route('example.dashboard.call-center'));
});
// Dashboard > Logistics
Breadcrumbs::for('dashboard.logistics', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Logistics', route('example.dashboard.logistics'));
});
// Dashboard > Website Analytics
Breadcrumbs::for('dashboard.website-analytics', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Website Analytics', route('example.dashboard.website-analytics'));
});
// Dashboard > Finance Performance
Breadcrumbs::for('dashboard.finance-performance', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Finance Performance', route('example.dashboard.finance-performance'));
});
// Dashboard > Store Analytics
Breadcrumbs::for('dashboard.store-analytics', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Store Analytics', route('example.dashboard.store-analytics'));
});
// Dashboard > Social
Breadcrumbs::for('dashboard.social', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Social', route('example.dashboard.social'));
});
// Dashboard > Delivery
Breadcrumbs::for('dashboard.delivery', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Delivery', route('example.dashboard.delivery'));
});
// Dashboard > Crypto
Breadcrumbs::for('dashboard.crypto', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Crypto', route('example.dashboard.crypto'));
});
// Dashboard > School
Breadcrumbs::for('dashboard.school', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('School', route('example.dashboard.school'));
});
// Dashboard > Podcast
Breadcrumbs::for('dashboard.podcast', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Podcast', route('example.dashboard.podcast'));
});

// User Profile
Breadcrumbs::for('user-profile', function (BreadcrumbTrail $trail) {
    $trail->push('User Profile', route('example.user-profile.overview'));
});
// User Profile > Overview
Breadcrumbs::for('user-profile.overview', function (BreadcrumbTrail $trail) {
    $trail->parent('user-profile');
    $trail->push('Overview', route('example.user-profile.overview'));
});
// User Profile > Projects
Breadcrumbs::for('user-profile.projects', function (BreadcrumbTrail $trail) {
    $trail->parent('user-profile');
    $trail->push('Projects', route('example.user-profile.projects'));
});
// User Profile > Campaigns
Breadcrumbs::for('user-profile.campaigns', function (BreadcrumbTrail $trail) {
    $trail->parent('user-profile');
    $trail->push('Campaigns', route('example.user-profile.campaigns'));
});
// User Profile > Documents
Breadcrumbs::for('user-profile.documents', function (BreadcrumbTrail $trail) {
    $trail->parent('user-profile');
    $trail->push('Documents', route('example.user-profile.documents'));
});
// User Profile > Followers
Breadcrumbs::for('user-profile.followers', function (BreadcrumbTrail $trail) {
    $trail->parent('user-profile');
    $trail->push('Followers', route('example.user-profile.followers'));
});
// User Profile > Activity
Breadcrumbs::for('user-profile.activity', function (BreadcrumbTrail $trail) {
    $trail->parent('user-profile');
    $trail->push('Activity', route('example.user-profile.activity'));
});


// Account
Breadcrumbs::for('account', function (BreadcrumbTrail $trail) {
    $trail->push('Account', route('example.account.overview'));
});
// Account > Overview
Breadcrumbs::for('account.overview', function (BreadcrumbTrail $trail) {
    $trail->parent('account');
    $trail->push('Overview', route('example.account.overview'));
});
// Account > Settings
Breadcrumbs::for('account.settings', function (BreadcrumbTrail $trail) {
    $trail->parent('account');
    $trail->push('Settings', route('example.account.settings'));
});
// Account > Security
Breadcrumbs::for('account.security', function (BreadcrumbTrail $trail) {
    $trail->parent('account');
    $trail->push('Security', route('example.account.security'));
});
// Account > Activity
Breadcrumbs::for('account.activity', function (BreadcrumbTrail $trail) {
    $trail->parent('account');
    $trail->push('Activity', route('example.account.activity'));
});
// Account > Billing
Breadcrumbs::for('account.billing', function (BreadcrumbTrail $trail) {
    $trail->parent('account');
    $trail->push('Billing', route('example.account.billing'));
});
// Account > Statements
Breadcrumbs::for('account.statements', function (BreadcrumbTrail $trail) {
    $trail->parent('account');
    $trail->push('Statements', route('example.account.statements'));
});
// Account > Referrals
Breadcrumbs::for('account.referrals', function (BreadcrumbTrail $trail) {
    $trail->parent('account');
    $trail->push('Referrals', route('example.account.referrals'));
});
// Account > API Keys
Breadcrumbs::for('account.api-keys', function (BreadcrumbTrail $trail) {
    $trail->parent('account');
    $trail->push('API Keys', route('example.account.api-keys'));
});
// Account > Logs
Breadcrumbs::for('account.logs', function (BreadcrumbTrail $trail) {
    $trail->parent('account');
    $trail->push('Logs', route('example.account.logs'));
});

// Corporate
Breadcrumbs::for('corporate', function (BreadcrumbTrail $trail) {
    $trail->push('Corporate', route('example.corporate'));
});
// Corporate > About
Breadcrumbs::for('corporate.about', function (BreadcrumbTrail $trail) {
    $trail->parent('corporate');
    $trail->push('About', route('example.corporate.about'));
});
// Corporate > Our Team
Breadcrumbs::for('corporate.our-team', function (BreadcrumbTrail $trail) {
    $trail->parent('corporate');
    $trail->push('Our Team', route('example.corporate.our-team'));
});
// Corporate > Contact Us
Breadcrumbs::for('corporate.contact-us', function (BreadcrumbTrail $trail) {
    $trail->parent('corporate');
    $trail->push('Contact Us', route('example.corporate.contact-us'));
});
// Corporate > Licenses
Breadcrumbs::for('corporate.licenses', function (BreadcrumbTrail $trail) {
    $trail->parent('corporate');
    $trail->push('Licenses', route('example.corporate.licenses'));
});
// Corporate > Sitemap
Breadcrumbs::for('corporate.sitemap', function (BreadcrumbTrail $trail) {
    $trail->parent('corporate');
    $trail->push('Sitemap', route('example.corporate.sitemap'));
});

// Social
Breadcrumbs::for('social', function (BreadcrumbTrail $trail) {
    $trail->push('Social', route('example.social'));
});
// Social > Feeds
Breadcrumbs::for('social.feeds', function (BreadcrumbTrail $trail) {
    $trail->parent('social');
    $trail->push('Feeds', route('example.social.feeds'));
});
// Social > Activity
Breadcrumbs::for('social.activity', function (BreadcrumbTrail $trail) {
    $trail->parent('social');
    $trail->push('Activity', route('example.social.activity'));
});
// Social > Followers
Breadcrumbs::for('social.followers', function (BreadcrumbTrail $trail) {
    $trail->parent('social');
    $trail->push('Followers', route('example.social.followers'));
});
// Social > Settings
Breadcrumbs::for('social.settings', function (BreadcrumbTrail $trail) {
    $trail->parent('social');
    $trail->push('Settings', route('example.social.settings'));
});

// Blog
Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
    $trail->push('Blog', route('example.blog'));
});
// Blog > Home
Breadcrumbs::for('blog.blog-home', function (BreadcrumbTrail $trail) {
    $trail->parent('blog');
    $trail->push('Home', route('example.blog.blog-home'));
});
// Blog > Post
Breadcrumbs::for('blog.blog-post', function (BreadcrumbTrail $trail) {
    $trail->parent('blog');
    $trail->push('Post', route('example.blog.blog-post'));
});

// FAQ
Breadcrumbs::for('faq', function (BreadcrumbTrail $trail) {
    $trail->push('FAQ', route('example.faq'));
});
// FAQ > Classic
Breadcrumbs::for('faq.faq-classic', function (BreadcrumbTrail $trail) {
    $trail->parent('faq');
    $trail->push('Classic', route('example.faq.faq-classic'));
});
// FAQ > Extended
Breadcrumbs::for('faq.faq-extended', function (BreadcrumbTrail $trail) {
    $trail->parent('faq');
    $trail->push('Extended', route('example.faq.faq-extended'));
});

// Pricing
Breadcrumbs::for('pricing', function (BreadcrumbTrail $trail) {
    $trail->push('Pricing', route('example.pricing'));
});
// Pricing > Column
Breadcrumbs::for('pricing.column-pricing', function (BreadcrumbTrail $trail) {
    $trail->parent('pricing');
    $trail->push('Column', route('example.pricing.column-pricing'));
});
// Pricing > Table
Breadcrumbs::for('pricing.table-pricing', function (BreadcrumbTrail $trail) {
    $trail->parent('pricing');
    $trail->push('Table', route('example.pricing.table-pricing'));
});

// Careers
Breadcrumbs::for('careers', function (BreadcrumbTrail $trail) {
    $trail->push('Careers', route('example.careers'));
});
// Careers > List
Breadcrumbs::for('careers.careers-list', function (BreadcrumbTrail $trail) {
    $trail->parent('careers');
    $trail->push('List', route('example.careers.careers-list'));
});
// Careers > Apply
Breadcrumbs::for('careers.careers-apply', function (BreadcrumbTrail $trail) {
    $trail->parent('careers');
    $trail->push('Apply', route('example.careers.careers-apply'));
});

// Utilities
Breadcrumbs::for('utilities', function (BreadcrumbTrail $trail) {
    $trail->push('Utilities', route('example.utilities.modals.general.invite-friends'));
});
// Utilities > Modals
Breadcrumbs::for('utilities.modals', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities');
    $trail->push('Modals', route('example.utilities.modals.general.invite-friends'));
});
// Utilities > Modals > General
Breadcrumbs::for('utilities.modals.general', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals');
    $trail->push('General', route('example.utilities.modals.general.invite-friends'));
});
// Utilities > Modals > General > Invite Friends
Breadcrumbs::for('utilities.modals.general.invite-friends', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals.general');
    $trail->push('Invite Friends', route('example.utilities.modals.general.invite-friends'));
});
// Utilities > Modals > General > View Users
Breadcrumbs::for('utilities.modals.general.view-users', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals.general');
    $trail->push('View Users', route('example.utilities.modals.general.view-users'));
});
// Utilities > Modals > General > Select Users
Breadcrumbs::for('utilities.modals.general.select-users', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals.general');
    $trail->push('Select Users', route('example.utilities.modals.general.select-users'));
});
// Utilities > Modals > General > Upgrade Plan
Breadcrumbs::for('utilities.modals.general.upgrade-plan', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals.general');
    $trail->push('Upgrade Plan', route('example.utilities.modals.general.upgrade-plan'));
});
// Utilities > Modals > General > Share & Earn
Breadcrumbs::for('utilities.modals.general.share-earn', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals.general');
    $trail->push('Share & Earn', route('example.utilities.modals.general.share-earn'));
});
// Utilities > Modals > Forms
Breadcrumbs::for('utilities.modals.forms', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals');
    $trail->push('Forms', route('example.utilities.modals.forms.new-target'));
});
// Utilities > Modals > Forms > New Target
Breadcrumbs::for('utilities.modals.forms.new-target', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals.forms');
    $trail->push('New Target', route('example.utilities.modals.forms.new-target'));
});
// Utilities > Modals > Forms > New Card
Breadcrumbs::for('utilities.modals.forms.new-card', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals.forms');
    $trail->push('New Card', route('example.utilities.modals.forms.new-card'));
});
// Utilities > Modals > Forms > New Address
Breadcrumbs::for('utilities.modals.forms.new-address', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals.forms');
    $trail->push('New Address', route('example.utilities.modals.forms.new-address'));
});
// Utilities > Modals > Forms > Create API Key
Breadcrumbs::for('utilities.modals.forms.create-api-key', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals.forms');
    $trail->push('Create API Key', route('example.utilities.modals.forms.create-api-key'));
});
// Utilities > Modals > Forms > Bidding
Breadcrumbs::for('utilities.modals.forms.bidding', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals.forms');
    $trail->push('Bidding', route('example.utilities.modals.forms.bidding'));
});
// Utilities > Modals > Wizards
Breadcrumbs::for('utilities.modals.wizards', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals');
    $trail->push('Wizards', route('example.utilities.modals.wizards.create-app'));
});
// Utilities > Modals > Wizards > Create App
Breadcrumbs::for('utilities.modals.wizards.create-app', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals.wizards');
    $trail->push('Create App', route('example.utilities.modals.wizards.create-app'));
});
// Utilities > Modals > Wizards > Create Campaign
Breadcrumbs::for('utilities.modals.wizards.create-campaign', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals.wizards');
    $trail->push('Create Campaign', route('example.utilities.modals.wizards.create-campaign'));
});
// Utilities > Modals > Wizards > Create Account
Breadcrumbs::for('utilities.modals.wizards.create-account', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals.wizards');
    $trail->push('Create Account', route('example.utilities.modals.wizards.create-account'));
});
// Utilities > Modals > Wizards > Create Project
Breadcrumbs::for('utilities.modals.wizards.create-project', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals.wizards');
    $trail->push('Create Project', route('example.utilities.modals.wizards.create-project'));
});
// Utilities > Modals > Wizards > Top Up Wallet
Breadcrumbs::for('utilities.modals.wizards.topup-wallet', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals.wizards');
    $trail->push('Top Up Wallet', route('example.utilities.modals.wizards.topup-wallet'));
});
// Utilities > Modals > Wizards > Offer a Deal
Breadcrumbs::for('utilities.modals.wizards.offer-a-deal', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals.wizards');
    $trail->push('Offer a Deal', route('example.utilities.modals.wizards.offer-a-deal'));
});
// Utilities > Modals > Wizards > Two Factor Auth
Breadcrumbs::for('utilities.modals.wizards.two-factor-auth', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals.wizards');
    $trail->push('Two Factor Auth', route('example.utilities.modals.wizards.two-factor-auth'));
});
// Utilities > Modals > Search
Breadcrumbs::for('utilities.modals.search', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals');
    $trail->push('Search', route('example.utilities.modals.search.users'));
});
// Utilities > Modals > Search > Users
Breadcrumbs::for('utilities.modals.search.users', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals.search');
    $trail->push('Users', route('example.utilities.modals.search.users'));
});
// Utilities > Modals > Search > Select Location
Breadcrumbs::for('utilities.modals.search.select-location', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.modals.search');
    $trail->push('Select Location', route('example.utilities.modals.search.select-location'));
});
// Utilities > Search
Breadcrumbs::for('utilities.search', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities');
    $trail->push('Search', route('example.utilities.search.horizontal'));
});
// Utilities > Search > Horizontal
Breadcrumbs::for('utilities.search.horizontal', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.search');
    $trail->push('Horizontal', route('example.utilities.search.horizontal'));
});
// Utilities > Search > Vertical
Breadcrumbs::for('utilities.search.vertical', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.search');
    $trail->push('Vertical', route('example.utilities.search.vertical'));
});
// Utilities > Search > Users
Breadcrumbs::for('utilities.search.users', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.search');
    $trail->push('Users', route('example.utilities.search.users'));
});
// Utilities > Search > Location
Breadcrumbs::for('utilities.search.location', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.search');
    $trail->push('Location', route('example.utilities.search.location'));
});
// Utilities > Wizards
Breadcrumbs::for('utilities.wizards', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities');
    $trail->push('Wizards', route('example.utilities.wizards.horizontal'));
});
// Utilities > Wizards > Horizontal
Breadcrumbs::for('utilities.wizards.horizontal', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.wizards');
    $trail->push('Horizontal', route('example.utilities.wizards.horizontal'));
});
// Utilities > Wizards > Vertical
Breadcrumbs::for('utilities.wizards.vertical', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.wizards');
    $trail->push('Vertical', route('example.utilities.wizards.vertical'));
});
// Utilities > Wizards > Create App
Breadcrumbs::for('utilities.wizards.create-app', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.wizards');
    $trail->push('Create App', route('example.utilities.wizards.create-app'));
});
// Utilities > Wizards > Create Campaign
Breadcrumbs::for('utilities.wizards.create-campaign', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.wizards');
    $trail->push('Create Campaign', route('example.utilities.wizards.create-campaign'));
});
// Utilities > Wizards > Create Account
Breadcrumbs::for('utilities.wizards.create-account', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.wizards');
    $trail->push('Create Account', route('example.utilities.wizards.create-account'));
});
// Utilities > Wizards > Create Project
Breadcrumbs::for('utilities.wizards.create-project', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.wizards');
    $trail->push('Create Project', route('example.utilities.wizards.create-project'));
});
// Utilities > Wizards > Top Up Wallet
Breadcrumbs::for('utilities.wizards.topup-wallet', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.wizards');
    $trail->push('Top Up Wallet', route('example.utilities.wizards.topup-wallet'));
});
// Utilities > Wizards > Offer a Deal
Breadcrumbs::for('utilities.wizards.offer-a-deal', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.wizards');
    $trail->push('Offer a Deal', route('example.utilities.wizards.offer-a-deal'));
});
// Utilities > Wizards > Two Factor Auth
Breadcrumbs::for('utilities.wizards.two-factor-auth', function (BreadcrumbTrail $trail) {
    $trail->parent('utilities.wizards');
    $trail->push('Two Factor Auth', route('example.utilities.wizards.two-factor-auth'));
});

// Widgets
Breadcrumbs::for('widgets', function (BreadcrumbTrail $trail) {
    $trail->push('Widgets', route('example.widgets.lists'));
});
// Widgets > Lists
Breadcrumbs::for('widgets.lists', function (BreadcrumbTrail $trail) {
    $trail->parent('widgets');
    $trail->push('Lists', route('example.widgets.lists'));
});
// Widgets > Statistics
Breadcrumbs::for('widgets.statistics', function (BreadcrumbTrail $trail) {
    $trail->parent('widgets');
    $trail->push('Statistics', route('example.widgets.statistics'));
});
// Widgets > Charts
Breadcrumbs::for('widgets.charts', function (BreadcrumbTrail $trail) {
    $trail->parent('widgets');
    $trail->push('Charts', route('example.widgets.charts'));
});
// Widgets > Mixed
Breadcrumbs::for('widgets.mixed', function (BreadcrumbTrail $trail) {
    $trail->parent('widgets');
    $trail->push('Mixed', route('example.widgets.mixed'));
});
// Widgets > Tables
Breadcrumbs::for('widgets.tables', function (BreadcrumbTrail $trail) {
    $trail->parent('widgets');
    $trail->push('Tables', route('example.widgets.tables'));
});
// Widgets > Feeds
Breadcrumbs::for('widgets.feeds', function (BreadcrumbTrail $trail) {
    $trail->parent('widgets');
    $trail->push('Feeds', route('example.widgets.feeds'));
});

// Projects
Breadcrumbs::for('projects', function (BreadcrumbTrail $trail) {
    $trail->push('Projects', route('example.projects.my-projects'));
});
// Projects > My Project
Breadcrumbs::for('projects.my-projects', function (BreadcrumbTrail $trail) {
    $trail->parent('projects');
    $trail->push('My Projects', route('example.projects.my-projects'));
});
// Projects > View Projects
Breadcrumbs::for('projects.view-project', function (BreadcrumbTrail $trail) {
    $trail->parent('projects');
    $trail->push('View Projects', route('example.projects.view-project'));
});
// Projects > Targets
Breadcrumbs::for('projects.targets', function (BreadcrumbTrail $trail) {
    $trail->parent('projects');
    $trail->push('Targets', route('example.projects.targets'));
});
// Projects > Budget
Breadcrumbs::for('projects.budget', function (BreadcrumbTrail $trail) {
    $trail->parent('projects');
    $trail->push('Budget', route('example.projects.budget'));
});
// Projects > Users
Breadcrumbs::for('projects.users', function (BreadcrumbTrail $trail) {
    $trail->parent('projects');
    $trail->push('Users', route('example.projects.users'));
});
// Projects > Files
Breadcrumbs::for('projects.files', function (BreadcrumbTrail $trail) {
    $trail->parent('projects');
    $trail->push('Files', route('example.projects.files'));
});
// Projects > Activity
Breadcrumbs::for('projects.activity', function (BreadcrumbTrail $trail) {
    $trail->parent('projects');
    $trail->push('Activity', route('example.projects.activity'));
});
// Projects > Settings
Breadcrumbs::for('projects.settings', function (BreadcrumbTrail $trail) {
    $trail->parent('projects');
    $trail->push('Settings', route('example.projects.settings'));
});

// eCommerce
Breadcrumbs::for('ecommerce', function (BreadcrumbTrail $trail) {
    $trail->push('eCommerce', route('example.ecommerce.catalog.product'));
});
// eCommerce > Catalog
Breadcrumbs::for('ecommerce.catalog', function (BreadcrumbTrail $trail) {
    $trail->parent('ecommerce');
    $trail->push('Catalog', route('example.ecommerce.catalog.product'));
});
// eCommerce > Catalog > Product
Breadcrumbs::for('ecommerce.catalog.product', function (BreadcrumbTrail $trail) {
    $trail->parent('ecommerce.catalog');
    $trail->push('Product', route('example.ecommerce.catalog.product'));
});
// eCommerce > Catalog > Categories
Breadcrumbs::for('ecommerce.catalog.categories', function (BreadcrumbTrail $trail) {
    $trail->parent('ecommerce.catalog');
    $trail->push('Categories', route('example.ecommerce.catalog.categories'));
});
// eCommerce > Catalog > Add Product
Breadcrumbs::for('ecommerce.catalog.add-product', function (BreadcrumbTrail $trail) {
    $trail->parent('ecommerce.catalog');
    $trail->push('Add Product', route('example.ecommerce.catalog.add-product'));
});
// eCommerce > Catalog > Edit Product
Breadcrumbs::for('ecommerce.catalog.edit-product', function (BreadcrumbTrail $trail) {
    $trail->parent('ecommerce.catalog');
    $trail->push('Edit Product', route('example.ecommerce.catalog.edit-product'));
});
// eCommerce > Catalog > Add Category
Breadcrumbs::for('ecommerce.catalog.add-category', function (BreadcrumbTrail $trail) {
    $trail->parent('ecommerce.catalog');
    $trail->push('Add Category', route('example.ecommerce.catalog.add-category'));
});
// eCommerce > Catalog > Edit Category
Breadcrumbs::for('ecommerce.catalog.edit-category', function (BreadcrumbTrail $trail) {
    $trail->parent('ecommerce.catalog');
    $trail->push('Edit Category', route('example.ecommerce.catalog.edit-category'));
});
// eCommerce > Sales
Breadcrumbs::for('ecommerce.sales', function (BreadcrumbTrail $trail) {
    $trail->parent('ecommerce');
    $trail->push('Sales', route('example.ecommerce.sales.listing'));
});
// eCommerce > Sales > Listing
Breadcrumbs::for('ecommerce.sales.listing', function (BreadcrumbTrail $trail) {
    $trail->parent('ecommerce.sales');
    $trail->push('Listing', route('example.ecommerce.sales.listing'));
});
// eCommerce > Sales > Details
Breadcrumbs::for('ecommerce.sales.details', function (BreadcrumbTrail $trail) {
    $trail->parent('ecommerce.sales');
    $trail->push('Details', route('example.ecommerce.sales.details'));
});
// eCommerce > Sales > Add Order
Breadcrumbs::for('ecommerce.sales.add-order', function (BreadcrumbTrail $trail) {
    $trail->parent('ecommerce.sales');
    $trail->push('Add Order', route('example.ecommerce.sales.add-order'));
});
// eCommerce > Sales > Edit Order
Breadcrumbs::for('ecommerce.sales.edit-order', function (BreadcrumbTrail $trail) {
    $trail->parent('ecommerce.sales');
    $trail->push('Edit Order', route('example.ecommerce.sales.edit-order'));
});
// eCommerce > Customers
Breadcrumbs::for('ecommerce.customers', function (BreadcrumbTrail $trail) {
    $trail->parent('ecommerce');
    $trail->push('Customers', route('example.ecommerce.customers.listing'));
});
// eCommerce > Customers > Listing
Breadcrumbs::for('ecommerce.customers.listing', function (BreadcrumbTrail $trail) {
    $trail->parent('ecommerce.customers');
    $trail->push('Listing', route('example.ecommerce.customers.listing'));
});
// eCommerce > Customers > Details
Breadcrumbs::for('ecommerce.customers.details', function (BreadcrumbTrail $trail) {
    $trail->parent('ecommerce.customers');
    $trail->push('Details', route('example.ecommerce.customers.details'));
});
// eCommerce > Reports
Breadcrumbs::for('ecommerce.reports', function (BreadcrumbTrail $trail) {
    $trail->parent('ecommerce');
    $trail->push('Reports', route('example.ecommerce.reports.view'));
});
// eCommerce > Reports > View
Breadcrumbs::for('ecommerce.reports.view', function (BreadcrumbTrail $trail) {
    $trail->parent('ecommerce.reports');
    $trail->push('View', route('example.ecommerce.reports.view'));
});
// eCommerce > Reports > Sales
Breadcrumbs::for('ecommerce.reports.sales', function (BreadcrumbTrail $trail) {
    $trail->parent('ecommerce.reports');
    $trail->push('Sales', route('example.ecommerce.reports.sales'));
});
// eCommerce > Reports > Returns
Breadcrumbs::for('ecommerce.reports.returns', function (BreadcrumbTrail $trail) {
    $trail->parent('ecommerce.reports');
    $trail->push('Returns', route('example.ecommerce.reports.returns'));
});
// eCommerce > Reports > Customer Orders
Breadcrumbs::for('ecommerce.reports.customer-orders', function (BreadcrumbTrail $trail) {
    $trail->parent('ecommerce.reports');
    $trail->push('Customer Orders', route('example.ecommerce.reports.customer-orders'));
});
// eCommerce > Reports > Shipping
Breadcrumbs::for('ecommerce.reports.shipping', function (BreadcrumbTrail $trail) {
    $trail->parent('ecommerce.reports');
    $trail->push('Shipping', route('example.ecommerce.reports.shipping'));
});
// eCommerce > Settings
Breadcrumbs::for('ecommerce.settings', function (BreadcrumbTrail $trail) {
    $trail->parent('ecommerce');
    $trail->push('Settings', route('example.ecommerce.settings'));
});

// Contacts
Breadcrumbs::for('contacts', function (BreadcrumbTrail $trail) {
    $trail->push('contacts', route('example.contacts.getting-started'));
});
// Contacts > Getting Started
Breadcrumbs::for('contacts.getting-started', function (BreadcrumbTrail $trail) {
    $trail->parent('contacts');
    $trail->push('Getting Started', route('example.contacts.getting-started'));
});
// Contacts > Add Contact
Breadcrumbs::for('contacts.add-contact', function (BreadcrumbTrail $trail) {
    $trail->parent('contacts');
    $trail->push('Add Contact', route('example.contacts.add-contact'));
});
// Contacts > Edit Contact
Breadcrumbs::for('contacts.edit-contact', function (BreadcrumbTrail $trail) {
    $trail->parent('contacts');
    $trail->push('Edit Contact', route('example.contacts.edit-contact'));
});
// Contacts > View Contact
Breadcrumbs::for('contacts.view-contact', function (BreadcrumbTrail $trail) {
    $trail->parent('contacts');
    $trail->push('View Contact', route('example.contacts.view-contact'));
});

// Support Center
Breadcrumbs::for('support-center', function (BreadcrumbTrail $trail) {
    $trail->push('Support Center', route('example.support-center.overview'));
});
// Support Center > Overview
Breadcrumbs::for('support-center.overview', function (BreadcrumbTrail $trail) {
    $trail->parent('support-center');
    $trail->push('Overview', route('example.support-center.overview'));
});
// Support Center > Tickets
Breadcrumbs::for('support-center.tickets', function (BreadcrumbTrail $trail) {
    $trail->parent('support-center');
    $trail->push('Tickets', route('example.support-center.tickets.list'));
});
// Support Center > Tickets > List
Breadcrumbs::for('support-center.tickets.list', function (BreadcrumbTrail $trail) {
    $trail->parent('support-center.tickets');
    $trail->push('List', route('example.support-center.tickets.list'));
});
// Support Center > Tickets > View
Breadcrumbs::for('support-center.tickets.view', function (BreadcrumbTrail $trail) {
    $trail->parent('support-center.tickets');
    $trail->push('View', route('example.support-center.tickets.view'));
});
// Support Center > Tutorials
Breadcrumbs::for('support-center.tutorials', function (BreadcrumbTrail $trail) {
    $trail->parent('support-center');
    $trail->push('Tutorials', route('example.support-center.tutorials.list'));
});
// Support Center > Tutorials > List
Breadcrumbs::for('support-center.tutorials.list', function (BreadcrumbTrail $trail) {
    $trail->parent('support-center.tutorials');
    $trail->push('List', route('example.support-center.tutorials.list'));
});
// Support Center > Tutorials > Post
Breadcrumbs::for('support-center.tutorials.post', function (BreadcrumbTrail $trail) {
    $trail->parent('support-center.tutorials');
    $trail->push('Post', route('example.support-center.tutorials.post'));
});
// Support Center > FAQ
Breadcrumbs::for('support-center.faq', function (BreadcrumbTrail $trail) {
    $trail->parent('support-center');
    $trail->push('FAQ', route('example.support-center.faq'));
});
// Support Center > Licenses
Breadcrumbs::for('support-center.licenses', function (BreadcrumbTrail $trail) {
    $trail->parent('support-center');
    $trail->push('Licenses', route('example.support-center.licenses'));
});
// Support Center > Contact
Breadcrumbs::for('support-center.contact', function (BreadcrumbTrail $trail) {
    $trail->parent('support-center');
    $trail->push('Contact', route('example.support-center.contact'));
});


// User Management
Breadcrumbs::for('user-management', function (BreadcrumbTrail $trail) {
    $trail->push('User Management', route('example.user-management.users.list'));
});
// User Management > Users
Breadcrumbs::for('user-management.users', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management');
    $trail->push('Users', route('example.user-management.users.list'));
});
// User Management > Users > List
Breadcrumbs::for('user-management.users.list', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.users');
    $trail->push('List', route('example.user-management.users.list'));
});
// User Management > Users > View
Breadcrumbs::for('user-management.users.view', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.users');
    $trail->push('View', route('example.user-management.users.view'));
});
// User Management > Roles
Breadcrumbs::for('user-management.roles', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management');
    $trail->push('Roles', route('example.user-management.roles.list'));
});
// User Management > Roles > List
Breadcrumbs::for('user-management.roles.list', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.roles');
    $trail->push('List', route('example.user-management.roles.list'));
});
// User Management > Roles > View
Breadcrumbs::for('user-management.roles.view', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.roles');
    $trail->push('View', route('example.user-management.roles.view'));
});
// User Management > Permissions
Breadcrumbs::for('user-management.permissions', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management');
    $trail->push('Permissions', route('example.user-management.permissions'));
});


// Customers
Breadcrumbs::for('customers', function (BreadcrumbTrail $trail) {
    $trail->push('Customers', route('example.customers.getting-started'));
});
// Customers > Getting Started
Breadcrumbs::for('customers.getting-started', function (BreadcrumbTrail $trail) {
    $trail->parent('customers');
    $trail->push('Getting Started', route('example.customers.getting-started'));
});
// Customers > List
Breadcrumbs::for('customers.list', function (BreadcrumbTrail $trail) {
    $trail->parent('customers');
    $trail->push('List', route('example.customers.list'));
});
// Customers > View
Breadcrumbs::for('customers.view', function (BreadcrumbTrail $trail) {
    $trail->parent('customers');
    $trail->push('View', route('example.customers.view'));
});

// Subscriptions
Breadcrumbs::for('subscriptions', function (BreadcrumbTrail $trail) {
    $trail->push('Subscriptions', route('example.subscriptions.getting-started'));
});
// Subscriptions > Getting Started
Breadcrumbs::for('subscriptions.getting-started', function (BreadcrumbTrail $trail) {
    $trail->parent('subscriptions');
    $trail->push('Getting Started', route('example.subscriptions.getting-started'));
});
// Subscriptions > List
Breadcrumbs::for('subscriptions.list', function (BreadcrumbTrail $trail) {
    $trail->parent('subscriptions');
    $trail->push('List', route('example.subscriptions.list'));
});
// Subscriptions > Add
Breadcrumbs::for('subscriptions.add', function (BreadcrumbTrail $trail) {
    $trail->parent('subscriptions');
    $trail->push('Add', route('example.subscriptions.add'));
});
// Subscriptions > View
Breadcrumbs::for('subscriptions.view', function (BreadcrumbTrail $trail) {
    $trail->parent('subscriptions');
    $trail->push('View', route('example.subscriptions.view'));
});

// Invoices
Breadcrumbs::for('invoices', function (BreadcrumbTrail $trail) {
    $trail->push('Invoices', route('example.invoices.view.invoice-1'));
});
// Invoices > View
Breadcrumbs::for('invoices.view', function (BreadcrumbTrail $trail) {
    $trail->parent('invoices');
    $trail->push('View', route('example.invoices.view.invoice-1'));
});
// Invoices > View > Invoice 1
Breadcrumbs::for('invoices.view.invoice-1', function (BreadcrumbTrail $trail) {
    $trail->parent('invoices.view');
    $trail->push('Invoice 1', route('example.invoices.view.invoice-1'));
});
// Invoices > View > Invoice 2
Breadcrumbs::for('invoices.view.invoice-2', function (BreadcrumbTrail $trail) {
    $trail->parent('invoices.view');
    $trail->push('Invoice 2', route('example.invoices.view.invoice-2'));
});
// Invoices > View > Invoice 2
Breadcrumbs::for('invoices.view.invoice-3', function (BreadcrumbTrail $trail) {
    $trail->parent('invoices.view');
    $trail->push('Invoice 2', route('example.invoices.view.invoice-3'));
});
// Invoices > Create
Breadcrumbs::for('invoices.create', function (BreadcrumbTrail $trail) {
    $trail->parent('invoices');
    $trail->push('Create', route('example.invoices.create'));
});

// File Manager
Breadcrumbs::for('file-manager', function (BreadcrumbTrail $trail) {
    $trail->push('File Manager', route('example.file-manager.folders'));
});
// File Manager > Folders
Breadcrumbs::for('file-manager.folders', function (BreadcrumbTrail $trail) {
    $trail->parent('file-manager');
    $trail->push('Folders', route('example.file-manager.folders'));
});
// File Manager > Files
Breadcrumbs::for('file-manager.files', function (BreadcrumbTrail $trail) {
    $trail->parent('file-manager');
    $trail->push('Files', route('example.file-manager.files'));
});
// File Manager > Blank
Breadcrumbs::for('file-manager.blank', function (BreadcrumbTrail $trail) {
    $trail->parent('file-manager');
    $trail->push('Blank', route('example.file-manager.blank'));
});
// File Manager > Settings
Breadcrumbs::for('file-manager.settings', function (BreadcrumbTrail $trail) {
    $trail->parent('file-manager');
    $trail->push('Settings', route('example.file-manager.settings'));
});

// Inbox
Breadcrumbs::for('inbox', function (BreadcrumbTrail $trail) {
    $trail->push('Inbox', route('example.inbox.listing'));
});
// Inbox > Listing
Breadcrumbs::for('inbox.listing', function (BreadcrumbTrail $trail) {
    $trail->parent('inbox');
    $trail->push('Listing', route('example.inbox.listing'));
});
// Inbox > Compose
Breadcrumbs::for('inbox.compose', function (BreadcrumbTrail $trail) {
    $trail->parent('inbox');
    $trail->push('Compose', route('example.inbox.compose'));
});
// Inbox > Reply
Breadcrumbs::for('inbox.reply', function (BreadcrumbTrail $trail) {
    $trail->parent('inbox');
    $trail->push('Reply', route('example.inbox.reply'));
});

// Chat
Breadcrumbs::for('chat', function (BreadcrumbTrail $trail) {
    $trail->push('Chat', route('example.chat.private'));
});
// Chat > Private
Breadcrumbs::for('chat.private', function (BreadcrumbTrail $trail) {
    $trail->parent('chat');
    $trail->push('Private', route('example.chat.private'));
});
// Chat > Group
Breadcrumbs::for('chat.group', function (BreadcrumbTrail $trail) {
    $trail->parent('chat');
    $trail->push('Group', route('example.chat.group'));
});
// Chat > Drawer
Breadcrumbs::for('chat.drawer', function (BreadcrumbTrail $trail) {
    $trail->parent('chat');
    $trail->push('Drawer', route('example.chat.drawer'));
});


// Calendar
Breadcrumbs::for('calendar', function (BreadcrumbTrail $trail) {
    $trail->push('Calendar', route('example.calendar'));
});
