Vagrant.configure("2") do |config|
    config.vm.box = "laravel/homestead"
    config.vm.provider "virtualbox" do |vb|
        vb.gui = false
        vb.memory = "1024"
    end
    config.vm.define "guest" do |guest|
        guest.vm.hostname = "lvovych"
        guest.vm.network "private_network", ip: "172.28.128.107", bridge: "en0: Ethernet"
        guest.vm.synced_folder "/Users/lvovych/Documents/development/lvovych.com", "/var/www"
        guest.vm.provision "shell", path: "provision/script.sh"
    end
end
