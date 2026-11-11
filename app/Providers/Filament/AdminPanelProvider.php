<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        $panel = $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => Color::Violet,
            ]);

        $signetPath = public_path('vendor/core/signet.svg');
        $loginLogoPath = public_path('vendor/core/login-logo.svg');

        if (is_file($signetPath) || is_file($loginLogoPath)) {
            $panel = $panel
                ->brandLogo(function () use ($signetPath, $loginLogoPath): ?string {
                    if (request()->routeIs('filament.admin.auth.login') && is_file($loginLogoPath)) {
                        return asset('vendor/core/login-logo.svg');
                    }

                    if (is_file($signetPath)) {
                        return asset('vendor/core/signet.svg');
                    }

                    return null;
                })
                ->brandLogoHeight(function () use ($loginLogoPath): string {
                    if (request()->routeIs('filament.admin.auth.login') && is_file($loginLogoPath)) {
                        return '4rem';
                    }

                    return '3.5rem';
                });
        }

        return $panel
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                PreventRequestForgery::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->plugins([
                \Moox\Audit\Plugins\AuditPlugin::make(),
                \Moox\Category\Plugins\CategoryPlugin::make(),
                \Moox\Category\Plugins\CategoryTreePlugin::make(),
                \Moox\Data\Filament\Plugins\StaticAllowanceReasonPlugin::make(),
                \Moox\Data\Filament\Plugins\StaticCertificateKindPlugin::make(),
                \Moox\Data\Filament\Plugins\StaticChargeReasonPlugin::make(),
                \Moox\Data\Filament\Plugins\StaticCountryPlugin::make(),
                \Moox\Data\Filament\Plugins\StaticCurrencyPlugin::make(),
                \Moox\Data\Filament\Plugins\StaticDocumentTypePlugin::make(),
                \Moox\Data\Filament\Plugins\StaticEasSchemePlugin::make(),
                \Moox\Data\Filament\Plugins\StaticIcdSchemePlugin::make(),
                \Moox\Data\Filament\Plugins\StaticIncotermPlugin::make(),
                \Moox\Data\Filament\Plugins\StaticLanguagePlugin::make(),
                \Moox\Data\Filament\Plugins\StaticLocalePlugin::make(),
                \Moox\Data\Filament\Plugins\StaticPaymentMeanPlugin::make(),
                \Moox\Data\Filament\Plugins\StaticTimezonePlugin::make(),
                \Moox\Data\Filament\Plugins\StaticUnitPlugin::make(),
                \Moox\Data\Filament\Plugins\StaticVatCategoryPlugin::make(),
                \Moox\Data\Filament\Plugins\StaticVatExemptionReasonPlugin::make(),
                \Moox\Jobs\Moox\Plugins\JobsPlugin::make(),
                \Moox\Jobs\Moox\Plugins\JobsWaitingPlugin::make(),
                \Moox\Jobs\Moox\Plugins\JobsFailedPlugin::make(),
                \Moox\Jobs\Moox\Plugins\JobsBatchesPlugin::make(),
                \Moox\Localization\Filament\Plugins\LocalizationPlugin::make(),
                \Moox\LoginLink\Plugins\LoginLinkPlugin::make(),
                \Moox\Media\Moox\Plugins\MediaCollectionPlugin::make(),
                \Moox\Media\Moox\Plugins\MediaPlugin::make(),
                \BezhanSalleh\FilamentShield\FilamentShieldPlugin::make(),
                \Moox\Prompts\Moox\Plugins\PromptsPlugin::make(),
                \Moox\Security\Plugins\ResetPasswordPlugin::make(),
                \Moox\Tag\Plugins\TagPlugin::make(),
                \Moox\User\Plugins\UserPlugin::make(),
                \Moox\UserDevice\Plugins\UserDevicePlugin::make(),
                \Moox\UserSession\Plugins\UserSessionPlugin::make(),
                
            ]);
    }
}
