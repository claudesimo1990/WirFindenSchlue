@servers(['web' => 'root@134.122.89.255'])

@setup
$home = "/var/www/html";
@endsetup

@story('deploy')
git
npm
@endstory

@task('git')
cd {{$home}};
git reset --hard;
git pull;
@endtask

@task('npm')
cd {{$home}};
npm run prod;
@endtask
