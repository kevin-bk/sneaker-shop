alias mage='php bin/magento';
alias mcl='mage c:c';
alias mcf='mage c:f';
alias mcu='mage se:up';
alias cl_gen='rm -rf generated/code/ var/cache';
alias cl_stt='rm -rf generated/code/ var/cache/ pub/static/frontend/'
alias stt='git status';
alias st='stt';
alias checkout='git checkout';
alias ck='checkout';
alias branch='git branch';
alias br='branch';
alias commit='git commit -m';
alias cm='commit';
alias push=push;
alias pull=pull;
alias pushf=pushf;
alias reset='git reset';
alias merge='git merge';
alias fetch='git fetch';
alias dff='git diff';
alias add='git add';
alias reset='git reset ';
alias rs='reset';
alias log='git log --oneline';
alias remote='git remote'
alias grunt_exec=grunt_exec;
alias phpcs=phpcs;
alias phpcbf=phpcbf;

#docker
alias de=dockerExec;
alias dup='docker-compose -f /home/public_html/docker-magento/docker-compose.yml -f /home/public_html/docker-magento/docker-compose.override.yml up -d';
alias ddown='docker-compose -f /home/public_html/docker-magento/docker-compose.yml -f /home/public_html/docker-magento/docker-compose.override.yml down';
alias docker_up='dup';
alias docker_down='ddown';

dockerExec()
{
    docker exec -it $1 bash
}

# curent branch
alias cbranch='git rev-parse --abbrev-ref HEAD';
alias cbr='cbranch';

alias reindex='mage in:rein';
alias deploy='mage s:s:d';
alias compile='mage se:di:com';

alias swphp=swphp;

alias php70='/usr/bin/php7.0';

alias grunt_ex=grunt_exec;

alias git_config=git_config;

git_config()
{
	echo 'git config credential.helper store';
	echo 'git credential-cache exit';
	echo 'git config core.fileMode false';
}
grunt_exec()
{
	grunt clean:$1; grunt exec:$1; grunt less:$1;
}

push()
{
	if [$1 == '']
    then
        git push origin `git rev-parse --abbrev-ref HEAD`;
    else
    	git push $1 `git rev-parse --abbrev-ref HEAD`;

    fi
}
pushf()
{
	if [$1 == '']
    then
        git push -f origin `git rev-parse --abbrev-ref HEAD`;
    else
    	git push -f $1 `git rev-parse --abbrev-ref HEAD`;

    fi
}

pull()
{
	if [$1 == '']

    then
        git pull origin `git rev-parse --abbrev-ref HEAD`;
    else
    	git pull  $1 `git rev-parse --abbrev-ref HEAD`;

    fi
}

swphp() {
	sudo a2dismod php7.1
	sudo a2dismod php7.4
    sudo a2dismod php7.2
    sudo a2dismod php7.0
	sudo a2enmod php$1
	sudo update-alternatives --set php /usr/bin/php$1
	sudo update-alternatives --set phar /usr/bin/phar$1
	sudo update-alternatives --set phar.phar /usr/bin/phar.phar$1
	sudo service apache2 restart
    php -v
}

phpcs() {
    php /home/public_html/magento-coding-standard/vendor/bin/phpcs --standard=Magento2 $@
    echo "command: php /home/public_html/magento-coding-standard/vendor/bin/phpcs --standard=Magento2 $1 $2"
}

phpcbf() {
    php /home/public_html/magento-coding-standard/vendor/bin/phpcbf $1
}
