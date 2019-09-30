const puppeteer = require('puppeteer');

(async () => {
  const browser = await puppeteer.launch();
  const page = await browser.newPage();
  await page.goto('http://localhost/form/');

  await page.type('#fname', 'Aras');
  await page.type('#lname', 'sdfsdf');

  await page.click('#submit');

  await page.screenshot({path: 'example.png'});

  await browser.close();
})();