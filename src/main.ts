/**
 * Load global styles.
 * Sass partials beginning with "_" are excluded.
 */
import.meta.glob(
  [
    '../style/*.{scss,sass}',
    '!../style/_*.{scss,sass}',
  ],
  {
    eager: true,
  }
);

/**
 * Load all component styles.
 */
import.meta.glob('../components/*/style.{scss,sass}', {
  eager: true,
});

/**
 * Load all component scripts.
 */
import.meta.glob('../components/*/script.{ts,js}', {
  eager: true,
});
