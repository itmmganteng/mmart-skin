<?php

use Illuminate\Support\Facades\Route;

Route::get('/example', function(){
    return redirect()->route('example.dashboard.default');
})->name('example');
Route::group(['prefix' => 'example', 'as' => 'example.'], function(){
    # Route Dashboard
    Route::get('/dashboard', function(){
        return redirect()->route('example.dashboard.default');
    })->name('dashboard');
    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function(){
        Route::get('/default', function(){
            addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);
            return view('pages.example.dashboards.default');
        })->name('default');

        Route::get('/ecommerce', function(){
            return view('pages.example.dashboards.ecommerce');
        })->name('ecommerce');

        Route::get('/projects', function(){
            addVendors(['vis-timeline']);
            return view('pages.example.dashboards.projects');
        })->name('projects');

        Route::get('/online-courses', function(){
            addVendors(['vis-timeline']);
            return view('pages.example.dashboards.online-courses');
        })->name('online-courses');

        Route::get('/marketing', function(){
            addVendors(['vis-timeline']);
            return view('pages.example.dashboards.marketing');
        })->name('marketing');

        Route::get('/bidding', function(){
            addVendor('fslightbox');
            return view('pages.example.dashboards.bidding');
        })->name('bidding');

        Route::get('/pos', function(){
            addJavascriptFile('assets/js/custom/pages/general/pos.js');
            return view('pages.example.dashboards.pos');
        })->name('pos');

        Route::get('/call-center', function(){
            addVendors(['amcharts', 'amcharts-maps']);
            return view('pages.example.dashboards.call-center');
        })->name('call-center');

        Route::get('/logistics', function(){
            addVendors(['amcharts', 'amcharts-maps']);
            return view('pages.example.dashboards.logistics');
        })->name('logistics');

        Route::get('/website-analytics', function(){
            addVendors(['amcharts', 'amcharts-maps']);
            return view('pages.example.dashboards.website-analytics');
        })->name('website-analytics');

        Route::get('/finance-performance', function(){
            addVendors(['amcharts', 'amcharts-maps']);
            return view('pages.example.dashboards.finance-performance');
        })->name('finance-performance');

        Route::get('/store-analytics', function(){
            addVendors(['amcharts', 'amcharts-maps']);
            return view('pages.example.dashboards.store-analytics');
        })->name('store-analytics');

        Route::get('/social', function(){
            addVendors(['vis-timeline']);
            return view('pages.example.dashboards.social');
        })->name('social');

        Route::get('/delivery', function(){
            addVendors(['amcharts', 'amcharts-maps']);
            return view('pages.example.dashboards.delivery');
        })->name('delivery');

        Route::get('/crypto', function(){
            addVendors(['amcharts', 'amcharts-maps']);
            return view('pages.example.dashboards.crypto');
        })->name('crypto');

        Route::get('/school', function(){
            return view('pages.example.dashboards.school');
        })->name('school');

        Route::get('/podcast', function(){
            return view('pages.example.dashboards.podcast');
        })->name('podcast');
    });

    # Route User Profile
    Route::get('/user-profile', function(){
        return redirect()->route('example.user-profile.overview');
    })->name('user-profile');
    Route::group(['prefix' => 'user-profile', 'as' => 'user-profile.'], function(){
        Route::get('/overview', function(){
            addJavascriptFile('assets/js/custom/pages/user-profile/general.js');
            addJavascriptFile('assets/js/widgets.bundle.js');
            addJavascriptFile('assets/js/custom/widgets.js');
            return view('pages.example.user-profile.overview');
        })->name('overview');

        Route::get('/projects', function(){
            return view('pages.example.user-profile.projects');
        })->name('projects');

        Route::get('/campaigns', function(){
            return view('pages.example.user-profile.campaigns');
        })->name('campaigns');

        Route::get('/documents', function(){
            return view('pages.example.user-profile.documents');
        })->name('documents');

        Route::get('/followers', function(){
            return view('pages.example.user-profile.followers');
        })->name('followers');

        Route::get('/activity', function(){
            return view('pages.example.user-profile.activity');
        })->name('activity');
    });

    # Route Account
    Route::get('/account', function(){
        return redirect()->route('example.account.overview');
    })->name('account');
    Route::group(['prefix' => 'account', 'as' => 'account.'], function(){
        Route::get('/overview', function(){
            return view('pages.example.account.overview');
        })->name('overview');

        Route::get('/settings', function(){
            addJavascriptFile('assets/js/custom/account/settings/signin-methods.js');
            addJavascriptFile('assets/js/custom/account/settings/deactivate-account.js');

            return view('pages.example.account.settings');
        })->name('settings');

        Route::get('/security', function(){
            addVendors(['amcharts', 'amcharts-maps']);
            addJavascriptFile('assets/js/custom/account/security/security-summary.js');
            addJavascriptFile('assets/js/custom/account/security/license-usage.js');
            addJavascriptFile('assets/js/widgets.bundle.js');
            addJavascriptFile('assets/js/custom/widgets.js');

            return view('pages.example.account.security');
        })->name('security');

        Route::get('/activity', function(){
            return view('pages.example.account.activity');
        })->name('activity');

        Route::get('/billing', function(){
            addJavascriptFile('assets/js/custom/account/billing/general.js');

            return view('pages.example.account.billing');
        })->name('billing');

        Route::get('/statements', function(){
            return view('pages.example.account.statements');
        })->name('statements');

        Route::get('/referrals', function(){
            return view('pages.example.account.referrals');
        })->name('referrals');

        Route::get('/api-keys', function(){
            addJavascriptFile('assets/js/custom/account/api-keys/api-keys.js');

            return view('pages.example.account.api-keys');
        })->name('api-keys');

        Route::get('/logs', function(){
            return view('pages.example.account.logs');
        })->name('logs');
    });

    # Route Authentication
    Route::get('/authentication', function(){
        return redirect()->route('example.authentication.corporate-layout.sign-in');
    })->name('authentication');
    Route::group(['prefix' => 'authentication', 'as' => 'authentication.'], function(){
        Route::group(['prefix' => 'corporate-layout', 'as' => 'corporate-layout.'], function(){
            Route::get('/sign-in', function(){
                return view('pages.example.authentication.corporate-layout.sign-in');
            })->name('sign-in');

            Route::get('/sign-up', function(){
                return view('pages.example.authentication.corporate-layout.sign-up');
            })->name('sign-up');

            Route::get('/two-factor', function(){
                addJavascriptFile('assets/js/custom/authentication/sign-in/two-factor.js');
                return view('pages.example.authentication.corporate-layout.two-factor');
            })->name('two-factor');

            Route::get('/reset-password', function(){
                return view('pages.example.authentication.corporate-layout.reset-password');
            })->name('reset-password');

            Route::get('/new-password', function(){
                return view('pages.example.authentication.corporate-layout.new-password');
            })->name('new-password');
        });

        Route::group(['prefix' => 'overlay-layout', 'as' => 'overlay-layout.'], function(){
            Route::get('/sign-in', function(){
                return view('pages.example.authentication.overlay-layout.sign-in');
            })->name('sign-in');

            Route::get('/sign-up', function(){
                return view('pages.example.authentication.overlay-layout.sign-up');
            })->name('sign-up');

            Route::get('/two-factor', function(){
                addJavascriptFile('assets/js/custom/authentication/sign-in/two-factor.js');
                return view('pages.example.authentication.overlay-layout.two-factor');
            })->name('two-factor');

            Route::get('/reset-password', function(){
                return view('pages.example.authentication.overlay-layout.reset-password');
            })->name('reset-password');

            Route::get('/new-password', function(){
                return view('pages.example.authentication.overlay-layout.new-password');
            })->name('new-password');
        });

        Route::group(['prefix' => 'creative-layout', 'as' => 'creative-layout.'], function(){
            Route::get('/sign-in', function(){
                return view('pages.example.authentication.creative-layout.sign-in');
            })->name('sign-in');

            Route::get('/sign-up', function(){
                return view('pages.example.authentication.creative-layout.sign-up');
            })->name('sign-up');

            Route::get('/two-factor', function(){
                addJavascriptFile('assets/js/custom/authentication/sign-in/two-factor.js');
                return view('pages.example.authentication.creative-layout.two-factor');
            })->name('two-factor');

            Route::get('/reset-password', function(){
                return view('pages.example.authentication.creative-layout.reset-password');
            })->name('reset-password');

            Route::get('/new-password', function(){
                return view('pages.example.authentication.creative-layout.new-password');
            })->name('new-password');
        });

        Route::group(['prefix' => 'fancy-layout', 'as' => 'fancy-layout.'], function(){
            Route::get('/sign-in', function(){
                return view('pages.example.authentication.fancy-layout.sign-in');
            })->name('sign-in');

            Route::get('/sign-up', function(){
                return view('pages.example.authentication.fancy-layout.sign-up');
            })->name('sign-up');

            Route::get('/two-factor', function(){
                addJavascriptFile('assets/js/custom/authentication/sign-in/two-factor.js');
                return view('pages.example.authentication.fancy-layout.two-factor');
            })->name('two-factor');

            Route::get('/reset-password', function(){
                return view('pages.example.authentication.fancy-layout.reset-password');
            })->name('reset-password');

            Route::get('/new-password', function(){
                return view('pages.example.authentication.fancy-layout.new-password');
            })->name('new-password');
        });

        Route::group(['prefix' => 'email-templates', 'as' => 'email-templates.'], function(){
            Route::get('/welcome-message', function(){
                return view('pages.example.authentication.email-templates.welcome-message');
            })->name('welcome-message');

            Route::get('/reset-password', function(){
                return view('pages.example.authentication.email-templates.reset-password');
            })->name('reset-password');

            Route::get('/subscription-confirmed', function(){
                return view('pages.example.authentication.email-templates.subscription-confirmed');
            })->name('subscription-confirmed');

            Route::get('/credit-card-declined', function(){
                return view('pages.example.authentication.email-templates.credit-card-declined');
            })->name('credit-card-declined');

            Route::get('/promo-1', function(){
                return view('pages.example.authentication.email-templates.promo-1');
            })->name('promo-1');

            Route::get('/promo-2', function(){
                return view('pages.example.authentication.email-templates.promo-2');
            })->name('promo-2');

            Route::get('/promo-3', function(){
                return view('pages.example.authentication.email-templates.promo-3');
            })->name('promo-3');
        });

        Route::get('/multi-steps-sign-up', function(){
            addJavascriptFile('assets/js/custom/utilities/modals/create-account.js');
            return view('pages.example.authentication.multi-steps-sign-up');
        })->name('multi-steps-sign-up');

        Route::get('/welcome-message', function(){
            return view('pages.example.authentication.welcome-message');
        })->name('welcome-message');

        Route::get('/verify-email', function(){
            return view('pages.example.authentication.verify-email');
        })->name('verify-email');

        Route::get('/coming-soon', function(){
            addJavascriptFile('assets/js/custom/authentication/sign-up/coming-soon.js');
            return view('pages.example.authentication.coming-soon');
        })->name('coming-soon');

        Route::get('/password-confirmation', function(){
            return view('pages.example.authentication.password-confirmation');
        })->name('password-confirmation');

        Route::get('/account-deactivation', function(){
            return view('pages.example.authentication.account-deactivation');
        })->name('account-deactivation');

        Route::get('/error-404', function(){
            return view('pages.example.authentication.error-404');
        })->name('error-404');

        Route::get('/error-500', function(){
            return view('pages.example.authentication.error-500');
        })->name('error-500');
    });

    # Route Corporate
    Route::get('/corporate', function(){
        return redirect()->route('example.corporate.about');
    })->name('corporate');
    Route::group(['prefix' => 'corporate', 'as' => 'corporate.'], function(){
        Route::get('/about', function(){
            return view('pages.example.corporate.about');
        })->name('about');

        Route::get('/our-team', function(){
            return view('pages.example.corporate.our-team');
        })->name('our-team');

        Route::get('/contact-us', function(){
            addVendor('leaflet');
            addJavascriptFile('assets/js/custom/pages/general/contact.js');
            return view('pages.example.corporate.contact-us');
        })->name('contact-us');

        Route::get('/licenses', function(){
            return view('pages.example.corporate.licenses');
        })->name('licenses');

        Route::get('/sitemap', function(){
            return view('pages.example.corporate.sitemap');
        })->name('sitemap');
    });

    # Route Social
    Route::get('/social', function(){
        return redirect()->route('example.social.about');
    })->name('social');
    Route::group(['prefix' => 'social', 'as' => 'social.'], function(){
        Route::get('/feeds', function(){
            addJavascriptFile('assets/js/custom/pages/social/feeds.js');

            return view('pages.example.social.feeds');
        })->name('feeds');

        Route::get('/activity', function(){
            return view('pages.example.social.activity');
        })->name('activity');

        Route::get('/followers', function(){
            addJavascriptFile('assets/js/custom/pages/user-profile/general.js');

            return view('pages.example.social.followers');
        })->name('followers');

        Route::get('/settings', function(){
            return view('pages.example.social.settings');
        })->name('settings');
    });

    # Route Blog
    Route::get('/blog', function(){
        return redirect()->route('example.blog.blog-home');
    })->name('blog');
    Route::group(['prefix' => 'blog', 'as' => 'blog.'], function(){
        Route::get('/blog-home', function(){
            addVendor('fslightbox');
            return view('pages.example.blog.blog-home');
        })->name('blog-home');

        Route::get('/blog-post', function(){
            addVendor('fslightbox');
            return view('pages.example.blog.blog-post');
        })->name('blog-post');
    });

    # Route FAQ
    Route::get('/faq', function(){
        return redirect()->route('example.faq.faq-classic');
    })->name('faq');
    Route::group(['prefix' => 'faq', 'as' => 'faq.'], function(){
        Route::get('/faq-classic', function(){
            addVendor('fslightbox');
            return view('pages.example.faq.faq-classic');
        })->name('faq-classic');

        Route::get('/faq-extended', function(){
            addVendor('fslightbox');
            return view('pages.example.faq.faq-extended');
        })->name('faq-extended');
    });

    # Route Pricing
    Route::get('/pricing', function(){
        return redirect()->route('example.pricing.column-pricing');
    })->name('pricing');
    Route::group(['prefix' => 'pricing', 'as' => 'pricing.'], function(){
        Route::get('/column-pricing', function(){
            addVendor('fslightbox');
            return view('pages.example.pricing.column-pricing');
        })->name('column-pricing');

        Route::get('/table-pricing', function(){
            addVendor('fslightbox');
            return view('pages.example.pricing.table-pricing');
        })->name('table-pricing');
    });

    # Route Careers
    Route::get('/careers', function(){
        return redirect()->route('example.careers.careers-list');
    })->name('careers');
    Route::group(['prefix' => 'careers', 'as' => 'careers.'], function(){
        Route::get('/careers-list', function(){
            addVendor('fslightbox');
            return view('pages.example.careers.careers-list');
        })->name('careers-list');

        Route::get('/careers-apply', function(){
            addJavascriptFile('assets/js/custom/pages/careers/apply.js');
            addVendor('fslightbox');
            return view('pages.example.careers.careers-apply');
        })->name('careers-apply');
    });

    # Route Utilities
    Route::get('/utilities', function(){
        return redirect()->route('example.utilities.modals.general.invite-friends');
    })->name('utilities');
    Route::group(['prefix' => 'utilities', 'as' => 'utilities.'], function(){
        # Route Modals
        Route::get('/modals', function(){
            return redirect()->route('example.utilities.modals.general.invite-friends');
        })->name('modals');
        Route::group(['prefix' => 'modals', 'as' => 'modals.'], function(){
            # Route General
            Route::get('/general', function(){
                return redirect()->route('example.utilities.modals.general.invite-friends');
            })->name('general');
            Route::group(['prefix' => 'general', 'as' => 'general.'], function(){
                Route::get('/invite-friends', function(){
                    return view('pages.example.utilities.modals.general.invite-friends');
                })->name('invite-friends');

                Route::get('/view-users', function(){
                    return view('pages.example.utilities.modals.general.view-users');
                })->name('view-users');

                Route::get('/select-users', function(){
                    return view('pages.example.utilities.modals.general.select-users');
                })->name('select-users');

                Route::get('/upgrade-plan', function(){
                    addJavascriptFile('assets/js/custom/utilities/modals/upgrade-plan.js');
                    return view('pages.example.utilities.modals.general.upgrade-plan');
                })->name('upgrade-plan');

                Route::get('/share-earn', function(){
                    addJavascriptFile('assets/js/custom/utilities/modals/share-earn.js');
                    return view('pages.example.utilities.modals.general.share-earn');
                })->name('share-earn');
            });

            # Route Forms
            Route::get('/forms', function(){
                return redirect()->route('example.utilities.modals.forms.new-target');
            })->name('forms');
            Route::group(['prefix' => 'forms', 'as' => 'forms.'], function(){
                Route::get('/new-target', function(){
                    addJavascriptFile('assets/js/custom/utilities/modals/new-target.js');
                    return view('pages.example.utilities.modals.forms.new-target');
                })->name('new-target');

                Route::get('/new-card', function(){
                    addJavascriptFile('assets/js/custom/utilities/modals/new-card.js');
                    return view('pages.example.utilities.modals.forms.new-card');
                })->name('new-card');

                Route::get('/new-address', function(){
                    addJavascriptFile('assets/js/custom/utilities/modals/new-address.js');
                    return view('pages.example.utilities.modals.forms.new-address');
                })->name('new-address');

                Route::get('/create-api-key', function(){
                    addJavascriptFile('assets/js/custom/utilities/modals/create-api-key.js');
                    return view('pages.example.utilities.modals.forms.create-api-key');
                })->name('create-api-key');

                Route::get('/bidding', function(){
                    addJavascriptFile('assets/js/custom/utilities/modals/bidding.js');
                    return view('pages.example.utilities.modals.forms.bidding');
                })->name('bidding');
            });

            # Route Wizards
            Route::get('/wizards', function(){
                return redirect()->route('example.utilities.modals.wizards.create-app');
            })->name('wizards');
            Route::group(['prefix' => 'wizards', 'as' => 'wizards.'], function(){
                Route::get('/create-app', function(){
                    addJavascriptFile('assets/js/custom/utilities/modals/create-app.js');
                    return view('pages.example.utilities.modals.wizards.create-app');
                })->name('create-app');

                Route::get('/create-campaign', function(){
                    addJavascriptFile('assets/js/custom/utilities/modals/create-campaign.js');
                    return view('pages.example.utilities.modals.wizards.create-campaign');
                })->name('create-campaign');

                Route::get('/create-account', function(){
                    addJavascriptFile('assets/js/custom/utilities/modals/create-account.js');
                    return view('pages.example.utilities.modals.wizards.create-account');
                })->name('create-account');

                Route::get('/create-project', function(){
                    addJavascriptFile('assets/js/custom/utilities/modals/create-project/budget.js');
                    addJavascriptFile('assets/js/custom/utilities/modals/create-project/complete.js');
                    addJavascriptFile('assets/js/custom/utilities/modals/create-project/files.js');
                    addJavascriptFile('assets/js/custom/utilities/modals/create-project/main.js');
                    addJavascriptFile('assets/js/custom/utilities/modals/create-project/settings.js');
                    addJavascriptFile('assets/js/custom/utilities/modals/create-project/targets.js');
                    addJavascriptFile('assets/js/custom/utilities/modals/create-project/team.js');
                    addJavascriptFile('assets/js/custom/utilities/modals/create-project/type.js');
                    return view('pages.example.utilities.modals.wizards.create-project');
                })->name('create-project');

                Route::get('/topup-wallet', function(){
                    addJavascriptFile('assets/js/custom/utilities/modals/top-up-wallet.js');
                    return view('pages.example.utilities.modals.wizards.topup-wallet');
                })->name('topup-wallet');

                Route::get('/offer-a-wallet', function(){
                    addJavascriptFile('assets/js/custom/utilities/modals/offer-a-deal/complete.js');
                    addJavascriptFile('assets/js/custom/utilities/modals/offer-a-deal/details.js');
                    addJavascriptFile('assets/js/custom/utilities/modals/offer-a-deal/finance.js');
                    addJavascriptFile('assets/js/custom/utilities/modals/offer-a-deal/main.js');
                    addJavascriptFile('assets/js/custom/utilities/modals/offer-a-deal/type.js');
                    return view('pages.example.utilities.modals.wizards.offer-a-deal');
                })->name('offer-a-deal');

                Route::get('/two-factor-auth', function(){
                    addJavascriptFile('assets/js/custom/utilities/modals/two-factor-authentication.js');
                    return view('pages.example.utilities.modals.wizards.two-factor-auth');
                })->name('two-factor-auth');
            });

            # Route Search
            Route::get('/search', function(){
                return redirect()->route('example.utilities.modals.search.users');
            })->name('search');
            Route::group(['prefix' => 'search', 'as' => 'search.'], function(){
                Route::get('/users', function(){
                    addJavascriptFile('assets/js/custom/utilities/modals/users-search.js');
                    return view('pages.example.utilities.modals.search.users');
                })->name('users');

                Route::get('/select-location', function(){
                    addVendor('leaflet');
                    addJavascriptFile('assets/js/custom/utilities/modals/select-location.js');
                    return view('pages.example.utilities.modals.search.select-location');
                })->name('select-location');
            });
        });

        # Route Search
        Route::get('/search', function(){
            return redirect()->route('example.utilities.search.horizontal');
        })->name('search');
        Route::group(['prefix' => 'search', 'as' => 'search.'], function(){
            Route::get('/horizontal', function(){
                return view('pages.example.utilities.search.horizontal');
            })->name('horizontal');

            Route::get('/vertical', function(){
                return view('pages.example.utilities.search.vertical');
            })->name('vertical');

            Route::get('/users', function(){
                return view('pages.example.utilities.search.users');
            })->name('users');

            Route::get('/location', function(){
                addVendor('leaflet');
                addJavascriptFile('assets/js/custom/utilities/modals/select-location.js');
                return view('pages.example.utilities.search.location');
            })->name('location');
        });

        # Route Wizard
        Route::get('/wizards', function(){
            return redirect()->route('example.utilities.wizards.horizontal');
        })->name('wizards');
        Route::group(['prefix' => 'wizards', 'as' => 'wizards.'], function(){
            Route::get('/horizontal', function(){
                addJavascriptFile('assets/js/custom/utilities/modals/create-account.js');
                return view('pages.example.utilities.wizards.horizontal');
            })->name('horizontal');

            Route::get('/vertical', function(){
                addJavascriptFile('assets/js/custom/utilities/modals/create-account.js');
                return view('pages.example.utilities.wizards.vertical');
            })->name('vertical');

            Route::get('/create-app', function(){
                addJavascriptFile('assets/js/custom/utilities/modals/create-app.js');
                return view('pages.example.utilities.wizards.create-app');
            })->name('create-app');

            Route::get('/create-campaign', function(){
                addJavascriptFile('assets/js/custom/utilities/modals/create-campaign.js');
                return view('pages.example.utilities.wizards.create-campaign');
            })->name('create-campaign');

            Route::get('/create-account', function(){
                addJavascriptFile('assets/js/custom/utilities/modals/create-account.js');
                return view('pages.example.utilities.wizards.create-account');
            })->name('create-account');

            Route::get('/create-project', function(){
                addJavascriptFile('assets/js/custom/utilities/modals/create-project/budget.js');
                addJavascriptFile('assets/js/custom/utilities/modals/create-project/complete.js');
                addJavascriptFile('assets/js/custom/utilities/modals/create-project/files.js');
                addJavascriptFile('assets/js/custom/utilities/modals/create-project/main.js');
                addJavascriptFile('assets/js/custom/utilities/modals/create-project/settings.js');
                addJavascriptFile('assets/js/custom/utilities/modals/create-project/targets.js');
                addJavascriptFile('assets/js/custom/utilities/modals/create-project/team.js');
                addJavascriptFile('assets/js/custom/utilities/modals/create-project/type.js');
                return view('pages.example.utilities.wizards.create-project');
            })->name('create-project');

            Route::get('/topup-wallet', function(){
                addJavascriptFile('assets/js/custom/utilities/modals/top-up-wallet.js');
                return view('pages.example.utilities.wizards.topup-wallet');
            })->name('topup-wallet');

            Route::get('/offer-a-wallet', function(){
                addJavascriptFile('assets/js/custom/utilities/modals/offer-a-deal/complete.js');
                addJavascriptFile('assets/js/custom/utilities/modals/offer-a-deal/details.js');
                addJavascriptFile('assets/js/custom/utilities/modals/offer-a-deal/finance.js');
                addJavascriptFile('assets/js/custom/utilities/modals/offer-a-deal/main.js');
                addJavascriptFile('assets/js/custom/utilities/modals/offer-a-deal/type.js');
                return view('pages.example.utilities.wizards.offer-a-deal');
            })->name('offer-a-deal');

            Route::get('/two-factor-auth', function(){
                addJavascriptFile('assets/js/custom/utilities/modals/two-factor-authentication.js');
                return view('pages.example.utilities.wizards.two-factor-auth');
            })->name('two-factor-auth');
        });
    });

    # Route Widgets
    Route::get('/widgets', function(){
        return redirect()->route('example.widgets.lists');
    })->name('widgets');
    Route::group(['prefix' => 'widgets', 'as' => 'widgets.'], function(){
        Route::get('/lists', function(){
            return view('pages.example.widgets.lists');
        })->name('lists');

        Route::get('/statistics', function(){
            addJavascriptFile('assets/js/custom/widgets.js');

            return view('pages.example.widgets.statistics');
        })->name('statistics');

        Route::get('/charts', function(){
            addJavascriptFile('assets/js/custom/widgets.js');

            return view('pages.example.widgets.charts');
        })->name('charts');

        Route::get('/mixed', function(){
            addJavascriptFile('assets/js/custom/widgets.js');

            return view('pages.example.widgets.mixed');
        })->name('mixed');

        Route::get('/tables', function(){
            return view('pages.example.widgets.tables');
        })->name('tables');

        Route::get('/feeds', function(){
            addJavascriptFile('assets/js/custom/widgets.js');

            return view('pages.example.widgets.feeds');
        })->name('feeds');
    });

    # Route Projects
    Route::get('/projects', function(){
        return redirect()->route('example.projects.my-projects');
    })->name('projects');
    Route::group(['prefix' => 'projects', 'as' => 'projects.'], function(){
        Route::get('/my-projects', function(){
            addJavascriptFile('assets/js/custom/apps/projects/list/list.js');

            return view('pages.example.projects.my-projects');
        })->name('my-projects');

        Route::get('/view-project', function(){
            addJavascriptFile('assets/js/custom/apps/projects/project/project.js');
            return view('pages.example.projects.view-project');
        })->name('view-project');

        Route::get('/targets', function(){
            return view('pages.example.projects.targets');
        })->name('targets');

        Route::get('/budget', function(){
            return view('pages.example.projects.budget');
        })->name('budget');

        Route::get('/users', function(){
            return view('pages.example.projects.users');
        })->name('users');

        Route::get('/files', function(){
            return view('pages.example.projects.files');
        })->name('files');

        Route::get('/activity', function(){
            return view('pages.example.projects.activity');
        })->name('activity');

        Route::get('/settings', function(){
            addJavascriptFile('assets/js/custom/apps/projects/settings/settings.js');

            return view('pages.example.projects.settings');
        })->name('settings');
    });

    # Route Ecommerce
    Route::get('/ecommerce', function(){
        return redirect()->route('example.ecommerce.catalog.product');
    })->name('ecommerce');
    Route::group(['prefix' => 'ecommerce', 'as' => 'ecommerce.'], function(){
        # Route Catalog
        Route::get('/catalog', function(){
            return redirect()->route('example.ecommerce.catalog.product');
        })->name('catalog');
        Route::group(['prefix' => 'catalog', 'as' => 'catalog.'], function(){
            Route::get('/product', function(){
                addJavascriptFile('assets/js/custom/apps/ecommerce/catalog/product.js');
                return view('pages.example.ecommerce.catalog.product');
            })->name('product');

            Route::get('/categories', function(){
                addJavascriptFile('assets/js/custom/apps/ecommerce/catalog/categories.js');
                return view('pages.example.ecommerce.catalog.categories');
            })->name('categories');

            Route::get('/add-product', function(){
                addJavascriptFile('assets/js/custom/apps/ecommerce/catalog/save-product.js');
                addVendor('formrepeater');
                return view('pages.example.ecommerce.catalog.add-product');
            })->name('add-product');

            Route::get('/edit-product', function(){
                addJavascriptFile('assets/js/custom/apps/ecommerce/catalog/save-product.js');
                addVendor('formrepeater');
                return view('pages.example.ecommerce.catalog.edit-product');
            })->name('edit-product');

            Route::get('/add-category', function(){
                addJavascriptFile('assets/js/custom/apps/ecommerce/catalog/save-category.js');
                return view('pages.example.ecommerce.catalog.add-category');
            })->name('add-category');

            Route::get('/edit-category', function(){
                addJavascriptFile('assets/js/custom/apps/ecommerce/catalog/save-category.js');
                return view('pages.example.ecommerce.catalog.edit-category');
            })->name('edit-category');
        });

        # Route Sales
        Route::get('/sales', function(){
            return redirect()->route('example.ecommerce.sales.listing');
        })->name('sales');
        Route::group(['prefix' => 'sales', 'as' => 'sales.'], function(){
            Route::get('/listing', function(){
                addJavascriptFile('assets/js/custom/apps/ecommerce/sales/listing.js');
                return view('pages.example.ecommerce.sales.listing');
            })->name('listing');

            Route::get('/details', function(){
                return view('pages.example.ecommerce.sales.details');
            })->name('details');

            Route::get('/add-order', function(){
                addJavascriptFile('assets/js/custom/apps/ecommerce/sales/save-order.js');
                return view('pages.example.ecommerce.sales.add-order');
            })->name('add-order');

            Route::get('/edit-order', function(){
                addJavascriptFile('assets/js/custom/apps/ecommerce/sales/save-order.js');
                return view('pages.example.ecommerce.sales.edit-order');
            })->name('edit-order');
        });

        # Route Customers
        Route::get('/customers', function(){
            return redirect()->route('example.ecommerce.customers.listing');
        })->name('customers');
        Route::group(['prefix' => 'customers', 'as' => 'customers.'], function(){
            Route::get('/listing', function(){
                addJavascriptFile('assets/js/custom/apps/ecommerce/customers/listing/add.js');
                addJavascriptFile('assets/js/custom/apps/ecommerce/customers/listing/export.js');
                addJavascriptFile('assets/js/custom/apps/ecommerce/customers/listing/listing.js');
                return view('pages.example.ecommerce.customers.listing');
            })->name('listing');

            Route::get('/details', function(){
                addJavascriptFile('assets/js/custom/apps/ecommerce/customers/details/add-address.js');
                addJavascriptFile('assets/js/custom/apps/ecommerce/customers/details/add-auth-app.js');
                addJavascriptFile('assets/js/custom/apps/ecommerce/customers/details/add-one-time-password.js');
                addJavascriptFile('assets/js/custom/apps/ecommerce/customers/details/payment-method.js');
                addJavascriptFile('assets/js/custom/apps/ecommerce/customers/details/transaction-history.js');
                addJavascriptFile('assets/js/custom/apps/ecommerce/customers/details/update-address.js');
                addJavascriptFile('assets/js/custom/apps/ecommerce/customers/details/update-password.js');
                addJavascriptFile('assets/js/custom/apps/ecommerce/customers/details/update-phone.js');
                addJavascriptFile('assets/js/custom/apps/ecommerce/customers/details/update-profile.js');
                return view('pages.example.ecommerce.customers.details');
            })->name('details');
        });

        # Route Reports
        Route::get('/reports', function(){
            return redirect()->route('example.ecommerce.reports.view');
        })->name('reports');
        Route::group(['prefix' => 'reports', 'as' => 'reports.'], function(){
            Route::get('/view', function(){
                addJavascriptFile('assets/js/custom/apps/ecommerce/customers/reports/views/views.js');
                return view('pages.example.ecommerce.reports.view');
            })->name('view');

            Route::get('/sales', function(){
                addJavascriptFile('assets/js/custom/apps/ecommerce/customers/reports/sales/sales.js');
                return view('pages.example.ecommerce.reports.sales');
            })->name('sales');

            Route::get('/returns', function(){
                addJavascriptFile('assets/js/custom/apps/ecommerce/customers/reports/returns/returns.js');
                return view('pages.example.ecommerce.reports.returns');
            })->name('returns');

            Route::get('/customer-orders', function(){
                addJavascriptFile('assets/js/custom/apps/ecommerce/customers/reports/customer-orders/customer-orders.js');
                return view('pages.example.ecommerce.reports.customer-orders');
            })->name('customer-orders');

            Route::get('/shipping', function(){
                addJavascriptFile('assets/js/custom/apps/ecommerce/customers/reports/shipping/shipping.js');
                return view('pages.example.ecommerce.reports.shipping');
            })->name('shipping');
        });

        # Route Settings
        Route::get('/settings', function(){
            addJavascriptFile('assets/js/custom/apps/ecommerce/customers/settings/settings.js');
            return view('pages.example.ecommerce.settings');
        })->name('settings');
    });

    # Route Contact
    Route::get('/contacts', function(){
        return redirect()->route('example.contacts.catalog.product');
    })->name('contacts');
    Route::group(['prefix' => 'contacts', 'as' => 'contacts.'], function(){
        Route::get('/getting-started', function(){
            return view('pages.example.contacts.getting-started');
        })->name('getting-started');

        Route::get('/add-contact', function(){
            return view('pages.example.contacts.add-contact');
        })->name('add-contact');

        Route::get('/edit-contact', function(){
            return view('pages.example.contacts.edit-contact');
        })->name('edit-contact');

        Route::get('/view-contact', function(){
            return view('pages.example.contacts.view-contact');
        })->name('view-contact');
    });

    # Route Support Center
    Route::get('/support-center', function(){
        return redirect()->route('example.support-center.overview');
    })->name('support-center');
    Route::group(['prefix' => 'support-center', 'as' => 'support-center.'], function(){
        Route::get('/overview', function(){
            addJavascriptFile('assets/js/custom/apps/support-center/tickets/create.js');
            return view('pages.example.support-center.overview');
        })->name('overview');

        # Route Tickets
        Route::group(['prefix' => 'tickets', 'as' => 'tickets.'], function(){
            Route::get('/list', function(){
                addJavascriptFile('assets/js/custom/apps/support-center/tickets/create.js');
                return view('pages.example.support-center.tickets.list');
            })->name('list');

            Route::get('/view', function(){
                addJavascriptFile('assets/js/custom/apps/support-center/general.js');
                addJavascriptFile('assets/js/custom/apps/support-center/tickets/create.js');
                addVendor('prismjs');

                return view('pages.example.support-center.tickets.view');
            })->name('view');
        });

        # Route Tutorials
        Route::group(['prefix' => 'tutorials', 'as' => 'tutorials.'], function(){
            Route::get('/list', function(){
                addJavascriptFile('assets/js/custom/apps/support-center/tickets/create.js');
                addVendor('fslightbox');
                return view('pages.example.support-center.tutorials.list');
            })->name('list');

            Route::get('/post', function(){
                addJavascriptFile('assets/js/custom/apps/support-center/tickets/create.js');
                return view('pages.example.support-center.tutorials.post');
            })->name('post');
        });

        Route::get('/faq', function(){
            addJavascriptFile('assets/js/custom/apps/support-center/tickets/create.js');
            return view('pages.example.support-center.faq');
        })->name('faq');

        Route::get('/licenses', function(){
            addJavascriptFile('assets/js/custom/apps/support-center/tickets/create.js');
            return view('pages.example.support-center.licenses');
        })->name('licenses');

        Route::get('/contact', function(){
            addJavascriptFile('assets/js/custom/pages/general/contact.js');
            addJavascriptFile('assets/js/custom/apps/support-center/tickets/create.js');
            addVendor('leaflet');
            return view('pages.example.support-center.contact');
        })->name('contact');
    });

    # Route User Management
    Route::get('/user-management', function(){
        return redirect()->route('example.user-management.users.list');
    })->name('user-management');
    Route::group(['prefix' => 'user-management', 'as' => 'user-management.'], function(){
        # Route Users
        Route::group(['prefix' => 'users', 'as' => 'users.'], function(){
            Route::get('/list', function(){
                addJavascriptFile('assets/js/custom/apps/user-management/users/list/table.js');
                addJavascriptFile('assets/js/custom/apps/user-management/users/list/export-user.js');
                addJavascriptFile('assets/js/custom/apps/user-management/users/list/add.js');
                return view('pages.example.user-management.users.list');
            })->name('list');

            Route::get('/view', function(){
                addJavascriptFile('assets/js/custom/apps/user-management/users/view/view.js');
                addJavascriptFile('assets/js/custom/apps/user-management/users/view/update-details.js');
                addJavascriptFile('assets/js/custom/apps/user-management/users/view/add-schedule.js');
                addJavascriptFile('assets/js/custom/apps/user-management/users/view/add-task.js');
                addJavascriptFile('assets/js/custom/apps/user-management/users/view/update-email.js');
                addJavascriptFile('assets/js/custom/apps/user-management/users/view/update-password.js');
                addJavascriptFile('assets/js/custom/apps/user-management/users/view/update-role.js');
                addJavascriptFile('assets/js/custom/apps/user-management/users/view/add-auth-app.js');
                addJavascriptFile('assets/js/custom/apps/user-management/users/view/add-one-time-password.js');
                return view('pages.example.user-management.users.view');
            })->name('view');
        });

        # Route Roles
        Route::group(['prefix' => 'roles', 'as' => 'roles.'], function(){
            Route::get('/list', function(){
                addJavascriptFile('assets/js/custom/apps/user-management/roles/list/add.js');
                addJavascriptFile('assets/js/custom/apps/user-management/roles/list/update-role.js');
                return view('pages.example.user-management.roles.list');
            })->name('list');

            Route::get('/view', function(){
                addJavascriptFile('assets/js/custom/apps/user-management/roles/view/view.js');
                addJavascriptFile('assets/js/custom/apps/user-management/roles/view/update-role.js');
                return view('pages.example.user-management.roles.view');
            })->name('view');
        });

        Route::get('/permissions', function(){
            addJavascriptFile('assets/js/custom/apps/user-management/permissions/list.js');
            addJavascriptFile('assets/js/custom/apps/user-management/permissions/add-permission.js');
            addJavascriptFile('assets/js/custom/apps/user-management/permissions/update-permission.js');
            return view('pages.example.user-management.permissions');
        })->name('permissions');
    });

    # Route Customers
    Route::get('/customers', function(){
        return redirect()->route('example.customers.getting-started');
    })->name('customers');
    Route::group(['prefix' => 'customers', 'as' => 'customers.'], function(){
        Route::get('/getting-started', function(){
            addJavascriptFile('assets/js/custom/apps/customers/add.js');
            return view('pages.example.customers.getting-started');
        })->name('getting-started');

        Route::get('/list', function(){
            addJavascriptFile('assets/js/custom/apps/customers/list/export.js');
            addJavascriptFile('assets/js/custom/apps/customers/list/list.js');
            addJavascriptFile('assets/js/custom/apps/customers/add.js');
            return view('pages.example.customers.list');
        })->name('list');

        Route::get('/view', function(){
            return view('pages.example.customers.view');
        })->name('view');
    });

    # Route Subscriptions
    Route::get('/subscriptions', function(){
        return redirect()->route('example.subscriptions.getting-started');
    })->name('subscriptions');
    Route::group(['prefix' => 'subscriptions', 'as' => 'subscriptions.'], function(){
        Route::get('/getting-started', function(){
            return view('pages.example.subscriptions.getting-started');
        })->name('getting-started');

        Route::get('/list', function(){
            addJavascriptFile('assets/js/custom/apps/subscriptions/list/export.js');
            addJavascriptFile('assets/js/custom/apps/subscriptions/list/list.js');
            return view('pages.example.subscriptions.list');
        })->name('list');

        Route::get('/add', function(){
            addJavascriptFile('assets/js/custom/apps/subscriptions/add/advanced.js');
            addJavascriptFile('assets/js/custom/apps/subscriptions/add/customer-select.js');
            addJavascriptFile('assets/js/custom/apps/subscriptions/add/products.js');
            return view('pages.example.subscriptions.add');
        })->name('add');

        Route::get('/view', function(){
            return view('pages.example.subscriptions.view');
        })->name('view');
    });

    # Route Invoices
    Route::get('/invoices', function(){
        return redirect()->route('example.invoices.view.invoice-1');
    })->name('invoices');
    Route::group(['prefix' => 'invoices', 'as' => 'invoices.'], function(){
        # Route View
        Route::get('/view', function(){
            return redirect()->route('example.invoices.view.invoice-1');
        })->name('view');
        Route::group(['prefix' => 'view', 'as' => 'view.'], function(){
            Route::get('/invoice-1', function(){
                return view('pages.example.invoices.view.invoice-1');
            })->name('invoice-1');

            Route::get('/invoice-2', function(){
                return view('pages.example.invoices.view.invoice-2');
            })->name('invoice-2');

            Route::get('/invoice-3', function(){
                return view('pages.example.invoices.view.invoice-3');
            })->name('invoice-3');
        });

        Route::get('/create', function(){
            addJavascriptFile('assets/js/custom/apps/invoices/create.js');
            return view('pages.example.invoices.create');
        })->name('create');
    });

    # Route File Manager
    Route::get('/file-manager', function(){
        return redirect()->route('example.file-manager.folders');
    })->name('file-manager');
    Route::group(['prefix' => 'file-manager', 'as' => 'file-manager.'], function(){
        Route::get('/folders', function(){
            addJavascriptFile('assets/js/custom/apps/file-manager/list.js');
            return view('pages.example.file-manager.folders');
        })->name('folders');

        Route::get('/files', function(){
            addJavascriptFile('assets/js/custom/apps/file-manager/list.js');
            return view('pages.example.file-manager.files');
        })->name('files');

        Route::get('/blank', function(){
            addJavascriptFile('assets/js/custom/apps/file-manager/list.js');
            return view('pages.example.file-manager.blank');
        })->name('blank');

        Route::get('/settings', function(){
            addJavascriptFile('assets/js/custom/apps/file-manager/settings.js');
            return view('pages.example.file-manager.settings');
        })->name('settings');
    });

    # Route Inbox
    Route::get('/inbox', function(){
        return redirect()->route('example.inbox.listing');
    })->name('inbox');
    Route::group(['prefix' => 'inbox', 'as' => 'inbox.'], function(){
        Route::get('/listing', function(){
            addJavascriptFile('assets/js/custom/apps/inbox/listing.js');
            return view('pages.example.inbox.listing');
        })->name('listing');

        Route::get('/compose', function(){
            addJavascriptFile('assets/js/custom/apps/inbox/compose.js');
            return view('pages.example.inbox.compose');
        })->name('compose');

        Route::get('/reply', function(){
            addJavascriptFile('assets/js/custom/apps/inbox/reply.js');
            return view('pages.example.inbox.reply');
        })->name('reply');
    });

    # Route Chat
    Route::get('/chat', function(){
        return redirect()->route('example.chat.private');
    })->name('chat');
    Route::group(['prefix' => 'chat', 'as' => 'chat.'], function(){
        Route::get('/private', function(){
            return view('pages.example.chat.private');
        })->name('private');

        Route::get('/group', function(){
            return view('pages.example.chat.group');
        })->name('group');

        Route::get('/drawer', function(){
            return view('pages.example.chat.drawer');
        })->name('drawer');
    });

    Route::get('/calendar', function(){
        addVendor('fullcalendar');
        addJavascriptFile('assets/js/custom/apps/calendar/calendar.js');
        return view('pages.example.calendar');
    })->name('calendar');

});
