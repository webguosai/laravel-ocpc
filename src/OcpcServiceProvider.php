<?php

namespace Webguosai\LaravelOcpc;

use Illuminate\Support\ServiceProvider;

class OcpcServiceProvider extends ServiceProvider
{
    /**
     * 服务提供者加是否延迟加载.
     *
     * @var bool
     */
    protected $defer = true; // 延迟加载服务
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // 视图目录指定
        $this->loadViewsFrom(__DIR__ . '/views', 'Ocpc');

        $this->publishes([
            // 发布视图目录到resources 下
            __DIR__.'/views' => base_path('resources/views/vendor/ocpc'),
            // 发布配置文件到 laravel 的config 下
            __DIR__.'/config/ocpc.php' => config_path('ocpc.php'),
        ]);
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // 单例绑定服务
        $this->app->singleton('ocpc', function ($app) {
            return new Ocpc($app['session'], $app['config']);
        });
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        // 因为延迟加载 所以要定义 provides 函数 具体参考laravel 文档
        return ['ocpc'];
    }
}
