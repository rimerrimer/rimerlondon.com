# rimerlondon.com

Static portfolio for https://rimerlondon.com — hosted on GitHub Pages (custom domain `rimerlondon.com`, apex primary, `www` -> apex).

## Structure
- `index.html` — landing (full-screen 3D forest, link-trees = navigation)
- `portfolio/index.html` — video grid (fetches `portfolio/videos.json`)
- `portfolio/videos/` — mp4 + jpg posters
- `portfolio/videos.json` — ordered source of truth: `{file, title, info}` — edit this when adding videos
- `portfolio/generate.php` — local helper: `php portfolio/generate.php` scans `videos/` and writes `videos_scanned.json` (copy new entries into `videos.json` with title/info, then commit)

## Adding a video
1. Add `portfolio/videos/New Clip.mp4` + `New Clip.jpg` (poster)
2. Edit `portfolio/videos.json` — add `{"file":"New Clip.mp4","title":"New Clip","info":"commercial"}` at desired position (top = first)
   - or run `php portfolio/generate.php` to generate `videos_scanned.json` then copy entry
3. `git commit -am "add New Clip" && git push` — Pages deploys in ~30s

## Hosting
- GitHub Pages: branch `main` / (root), CNAME `rimerlondon.com`
- DNS (ZXCS): `A 185.199.108.153`, `185.199.109.153`, `185.199.110.153`, `185.199.111.153`; `www CNAME rimerrimer.github.io.`; keep `MX 10 mail.rimerlondon.com`
