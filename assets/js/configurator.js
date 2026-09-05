(function () {
  const section = document.querySelector('[data-configurator]');
  if (!section) return;

  const ram = section.querySelector('#cfgRam');
  const cpu = section.querySelector('#cfgCpu');
  const disk = section.querySelector('#cfgDisk');
  const location = section.querySelector('#cfgLocation');
  const output = section.querySelector('#cfgPrice');
  const details = section.querySelector('#cfgDetails');

  const prices = {
    ram: { 2: 25, 4: 45, 8: 95, 16: 165, 32: 290, 64: 540 },
    cpu: { 1: 30, 2: 60, 4: 120, 8: 210, 16: 380 },
    disk: { 50: 20, 100: 35, 250: 75, 500: 130, 1000: 220 },
    location: { istanbul: 24, frankfurt: 38, amsterdam: 42 }
  };

  function compute() {
    const total = prices.ram[ram.value] + prices.cpu[cpu.value] + prices.disk[disk.value] + prices.location[location.value];
    output.textContent = `₺${total} / ay`;
    details.textContent = `${ram.value} GB RAM • ${cpu.value} Core • ${disk.value >= 1000 ? '1 TB' : disk.value + ' GB'} NVMe • ${location.options[location.selectedIndex].text}`;
  }

  [ram, cpu, disk, location].forEach((el) => el.addEventListener('change', compute));
  compute();
})();
