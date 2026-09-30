# Nuxt 3 Minimal Starter

## Contact form email

The contact form posts to `/contact.php`. The PHP handler is in `public/contact.php` and sends enquiries to `enquiry@idmng.com`, with the visitor's email as Reply-To. Change `$to` and `$from` in that file if needed; the sending address must be permitted by your mail host.

For PHP hosting (such as cPanel), run `npm run generate` and upload the contents of `.output/public` to your website document root. Ensure `/contact.php` is executed by PHP and is excluded from any SPA fallback rewrite. PHP's `mail()` must be enabled and outgoing mail configured by the host. A successful response means the mail server accepted the message, not that it reached the inbox.

Nuxt's development server and Node-only deployments do not execute PHP. For those deployments, configure the web server to route `/contact.php` to a PHP runtime on the same origin. Never serve PHP source as a static download. Do not put SMTP passwords in this public file. Before public launch, configure rate limiting or spam protection on the endpoint at your host.

To verify a deployment, submit the contact form and check the recipient inbox and spam folder. Failed submissions keep the entered details so visitors can retry.

Look at the [Nuxt 3 documentation](https://nuxt.com/docs/getting-started/introduction) to learn more.

## Setup

Make sure to install the dependencies:

```bash
# npm
npm install

# pnpm
pnpm install

# yarn
yarn install

# bun
bun install
```

## Development Server

Start the development server on `http://localhost:3000`:

```bash
# npm
npm run dev

# pnpm
pnpm run dev

# yarn
yarn dev

# bun
bun run dev
```

## Production

Build the application for production:

```bash
# npm
npm run build

# pnpm
pnpm run build

# yarn
yarn build

# bun
bun run build
```

Locally preview production build:

```bash
# npm
npm run preview

# pnpm
pnpm run preview

# yarn
yarn preview

# bun
bun run preview
```

Check out the [deployment documentation](https://nuxt.com/docs/getting-started/deployment) for more information.
