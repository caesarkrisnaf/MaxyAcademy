import puppeteer from "puppeteer";

const YOUTUBE_URL = 'https://youtube.com';
const DISCORD_URL = 'https://discord.com';

const youtube = {
  browser: null,
  page: null,
  initialize: async () => {
    youtube.browser = await puppeteer.launch({ headless: false });
    youtube.page = await youtube.browser.newPage();
    await youtube.page.setViewport({ width: 1080, height: 1024 });

    await youtube.page.goto(YOUTUBE_URL);
  },
  search: async (text) => {
    await youtube.page.waitForSelector('input#search');
    await youtube.page.type('input#search', text, { delay: 100 })
    await youtube.page.keyboard.press('Enter');

  },
  moveTo: async (video) => {
    await youtube.page.goto(BASE_URL + "/watch?v=" + video);
    await youtube.page.waitForNavigation();
  },
};

const discord = {
  browser: null,
  page: null,
  initialize: async () => {
    discord.browser = await puppeteer.launch({ headless: false });
    discord.page = await discord.browser.newPage();
    await discord.page.setViewport({ width: 1080, height: 1024 });

    await discord.page.goto(DISCORD_URL);
  },
  login: async () => {
    let loginButton = await discord.page.$('a[href="https://discord.com/login"]');
    await loginButton.click();
    await discord.page.waitForNavigation();

    await discord.page.waitForSelector('input[name="email"]');

    await discord.page.type('input[name="email"]', 'caesarkrisna08@gmail.com', { delay: 100 });
    await discord.page.type('input[name="password"]', '021769898caesar', { delay: 50 });
    loginButton = await discord.page.$('div.contents_dd4f85');
    await loginButton.click();
  },
  moveTo: async (serverID, channelID) => {
    await discord.page.goto("https://discord.com/channels/" + serverID + "/" + channelID);
    await discord.page.waitForNavigation();
  },
  textMsg: async (text) => {

    await discord.page.waitForSelector('div[role="textbox"]');

    await discord.page.type('div[role="textbox"]', text, { delay: 100 })
    await discord.page.keyboard.press('Enter');
  }
};

export { youtube, discord };
