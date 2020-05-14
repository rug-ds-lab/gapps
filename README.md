# gapps
A PmWiki plugin to embed select Google apps such as maps and youtube videos.

# Installation
  * Place `gapps.php` in PmWiki's cookbook directory.

# Setup
To use this plugin, it must be enabled in PmWiki's `local/config.php` file. It can be enabled by including the following lines:
```
$google_api_key = 'YOUR_GOOGLE_API_KEY';
include_once('cookbook/gapps.php');
```
Setting a Google API key is only required when embedding maps.

# Usage
Below is the list of available commands. Remember to always put a line feed after each command.

```
(:youtube videoid:)
```
Embeds a youtube video with the id `videoid`. For example, `(:youtube dQw4w9WgXcQ:)` will embed [this](https://www.youtube.com/watch?v=dQw4w9WgXcQ) video.

```
(:maps placeid:)
```
Embeds a map with the id `placeid`. For example, `(:maps ChIJa0V3TxrNyUcR5Vbw83TCQZg:)` will embed a map featuring the Bernoulliborg.
