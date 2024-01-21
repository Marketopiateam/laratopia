<?php

namespace App\Providers;

use App\Events\UsersAssignedToNewProject;
use App\Events\ProjectDeleted;
use App\Events\ProjectUpdated;
use App\Events\Post\PostCreated;
use App\Events\Post\PostUpdated;
use App\Events\Post\PostDeleted;
use App\Events\Design\DesignCreated;
use App\Events\Design\DesignUpdated;
use App\Events\Design\DesignDeleted;
use App\Events\Video\VideoCreated;
use App\Events\Video\VideoUpdated;
use App\Events\Video\VideoDeleted;
use App\Listeners\SendEmailToProjectAssignees;
use App\Listeners\ProjectUpdatedEmail;
use App\Listeners\ProjectDeletedEmail;
use App\Listeners\Post\PostCreatedEmail;
use App\Listeners\Post\PostUpdatedEmail;
use App\Listeners\Post\PostDeletedEmail;
use App\Listeners\Design\DesignCreatedEmail;
use App\Listeners\Design\DesignUpdatedEmail;
use App\Listeners\Design\DesignDeletedEmail;
use App\Listeners\Video\VideoCreatedEmail;
use App\Listeners\Video\VideoUpdatedEmail;
use App\Listeners\Video\VideoDeletedEmail;
use App\Models\Ad as AdModel;
use App\Models\Application as ApplicationModel;
use App\Models\Design as DesignModel;
use App\Models\MarketResearch as MarketResearchModel;
use App\Models\Motion as MotionModel;
use App\Models\Post as PostModel;
use App\Models\Project as ProjectModel;
use App\Models\Quotation as QuotationModel;
use App\Models\Studio as StudioModel;
use App\Models\System as SystemModel;
use App\Models\Team as TeamModel;
use App\Models\Video as VideoModel;
use App\Models\Website as WebsiteModel;
use App\Observers\AdObserver;
use App\Observers\ApplicationObserver;
use App\Observers\DesignObserver;
use App\Observers\MarketResearchObserver;
use App\Observers\MotionObserver;
use App\Observers\PostObserver;
use App\Observers\ProjectObserver;
use App\Observers\QuotationObserver;
use App\Observers\StudioObserver;
use App\Observers\SystemObserver;
use App\Observers\TeamObserver;
use App\Observers\VideoObserver;
use App\Observers\WebsiteObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        UsersAssignedToNewProject::class => [
            SendEmailToProjectAssignees::class,
        ],
        ProjectUpdated::class => [
            ProjectUpdatedEmail::class,
        ],
        ProjectDeleted::class => [
            ProjectDeletedEmail::class,
        ],
        PostCreated::class => [
            PostCreatedEmail::class,
        ],
        PostUpdated::class => [
            PostUpdatedEmail::class,
        ],
        PostDeleted::class => [
            PostDeletedEmail::class,
        ],
        DesignCreated::class => [
            DesignCreatedEmail::class,
        ],
        DesignUpdated::class => [
            DesignUpdatedEmail::class,
        ],
        DesignDeleted::class => [
            DesignDeletedEmail::class,
        ],
        VideoCreated::class => [
            VideoCreatedEmail::class,
        ],
        VideoUpdated::class => [
            VideoUpdatedEmail::class,
        ],
        VideoDeleted::class => [
            VideoDeletedEmail::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot()
    {
        ProjectModel::observe(ProjectObserver::class);
        PostModel::observe(PostObserver::class);
        DesignModel::observe(DesignObserver::class);
        VideoModel::observe(VideoObserver::class);
        AdModel::observe(AdObserver::class);
        TeamModel::observe(TeamObserver::class);
        StudioModel::observe(StudioObserver::class);
        MotionModel::observe(MotionObserver::class);
        WebsiteModel::observe(WebsiteObserver::class);
        MarketResearchModel::observe(MarketResearchObserver::class);
        QuotationModel::observe(QuotationObserver::class);
        ApplicationModel::observe(ApplicationObserver::class);
        SystemModel::observe(SystemObserver::class);
    }
}
