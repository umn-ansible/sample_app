<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/umn-ansible/sample_app.git');
// set('writable_use_sudo', true);
add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('dev')
    ->set('remote_user', 'latis_deploy')
    ->set('deploy_path', '/var/www/html/')
    ->set('hostname', 'cla-mycareermanagment-dev-02.oit.umn.edu');


// Hooks

after('deploy:failed', 'deploy:unlock');
