# Digital Accelerator – Temă WordPress

Temă WordPress simplă, orientată spre blog, pentru site-ul programului **Digital Accelerator** (transformare digitală în școlile din Moldova).

## Structură

```
digital-accelerator/
├── assets/css/main.css      # Stiluri principale
├── assets/js/navigation.js  # Meniu mobil
├── inc/fallback-menu.php    # Meniu implicit dacă nu e configurat în WP
├── template-parts/home/     # Secțiuni prima pagină
├── front-page.php           # Homepage cu toate secțiunile
├── home.php                 # Listă articole (blog)
├── page.php, single.php     # Pagini statice și articole
└── functions.php
```

## Instalare pe server

1. Conținutul acestui folder este **tema WordPress** (directorul rădăcină al proiectului).
2. Pe server trebuie să ajungă în `wp-content/themes/digital-accelerator/`.
3. Configurația FTP este în `.vscode/sftp.json` (`remotePath`).

Dacă hosting-ul folosește alt path, actualizează `remotePath`, de exemplu:
```
/www/wp-content/themes/digital-accelerator
/public_html/wp-content/themes/digital-accelerator
```

## Configurare WordPress (recomandat)

### Setări generale
- **Titlu site:** Digital Accelerator
- **Slogan:** Program de transformare digitală pentru școlile din Moldova

### Prima pagină
1. Creează o pagină goală **Acasă** (slug: `acasa` – opțional).
2. Creează o pagină **Noutăți** (slug: `noutati`).
3. **Setări → Citire:**
   - Pagina principală: **Acasă** (sau lasă implicit – tema folosește `front-page.php`)
   - Pagina articolelor: **Noutăți**

### Pagini de creat (slug-uri sugerate)
| Pagină | Slug |
|--------|------|
| Despre program | `despre-program` |
| Școli participante | `scoli-participante` |
| Resurse | `resurse` |
| Studii de caz | `studii-de-caz` |
| Contact | `contact` (opțional – există secțiune pe homepage) |

### Meniu principal
**Aspect → Meniuri** – adaugă paginile de mai sus + linkuri ancora:
- `#despre`, `#ofera`, `#contact` (pentru secțiuni pe homepage)

Atribuie meniul la locația **Meniu principal**.

### Logo
**Aspect → Personalizare → Identitate site** – încarcă logo-ul proiectului.

### Formular contact
Instalează **Contact Form 7** (sau similar). Tema va folosi automat shortcode-ul dacă există formularul cu id/title `contact`.

### Date contact
Editează funcția `da_get_contact_defaults()` din `functions.php` sau (ulterior) Customizer pentru email, Facebook etc.

## Ce conține homepage-ul

Tema include deja textele din brief:
- Hero + butoane CTA
- Despre program
- Ce oferă programul (5 carduri)
- Categorii principale (linkuri către pagini)
- Beneficiari
- Parteneri și implementare
- Impact
- Ultimele 3 noutăți (din articole WP)
- Contact + formular placeholder
- Disclaimer în footer

## Următorii pași (de discutat)

- **Design:** culori oficiale, logo-uri parteneri, imagini hero
- **Tipuri de conținut:** Custom Post Types pentru Școli, Resurse, Studii de caz
- **Multilingv:** RO + EN (WPML / Polylang)
- **Customizer:** contact, social media, texte editabile fără cod
- **Plugin-uri:** CF7, Yoast SEO, cache

## Dezvoltare locală

Proiectul poate fi sincronizat cu serverul via SFTP (upload on save activ în VS Code).

### Bootstrap (npm)

Bootstrap este instalat prin npm și copiat în `assets/vendor/bootstrap/` pentru deploy pe server (fără `node_modules`).

```bash
cd digital-accelerator
npm install
```

După update la Bootstrap:

```bash
npm run copy-bootstrap
```

Fișierele sunt încărcate automat în WordPress din `functions.php` (CSS + JS bundle).

### custom.scss – stilurile tale

Fișier sursă: `assets/scss/custom.scss`  
Output compilat: `assets/css/custom.css` (upload pe server via SFTP)

```bash
npm run build:css   # compilare manuală
npm run watch:css   # watch continuu (alternativ la task-ul automat)
```

Ordinea încărcării în site: Bootstrap → main.css → **custom.css**

### Deploy automat la salvare (SFTP)

Configurația este în `.vscode/`:

1. **Orice fișier PHP/JS/CSS** salvat → upload direct pe server (`uploadOnSave`)
2. **`custom.scss` salvat** → compilare automată (`Run on Save`) → `custom.css` generat → upload automat (SFTP watcher)
3. La deschiderea proiectului → task **SCSS: watch** pornește în fundal (backup pentru compilare)

**Extensii recomandate** (Cursor le va sugera la deschidere):

- [SFTP](https://marketplace.visualstudio.com/items?itemName=Natizyskunk.vscode-sftp) – upload pe server
- [Run On Save](https://marketplace.visualstudio.com/items?itemName=emeraldwalk.runonsave) – compilează SCSS la salvare

**Prima dată:**

1. Instalează extensiile recomandate
2. Deschide proiectul (`digital-accelerator/` sau `wp-accelerator.code-workspace`)
3. La prompt **„Allow Automatic Tasks”** → apasă **Allow**
4. Salvează un fișier `.php` – ar trebui să vezi upload în output-ul SFTP

Fișierele `.scss` **nu** se uploadează pe server (doar CSS compilat).
