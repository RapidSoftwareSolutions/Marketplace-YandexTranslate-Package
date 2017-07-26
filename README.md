[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/YandexTranslate/functions?utm_source=RapidAPIGitHub_YandexTranslateFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# YandexTranslate Package
The API provides access to the Yandex online machine translation service. It supports more than 70 languages and can translate separate words or complete texts. The API makes it possible to embed Yandex.Translate in a mobile app or web service for end users. Or translate large quantities of text, such as technical documentation.
* Domain: [yandex.com](https://yandex.com)
* Credentials: apiKey

## How to get credentials: 
0. Navigate to [developers page](https://translate.yandex.com/developers/keys)
1. Add new API key.

## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 
## YandexTranslate.getSupportedLanguages
Gets a list of translation directions supported by the service.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your yandex api key.
| ui    | String     | In the response, supported languages are listed in the langs field with the definitions of the language codes. Language names are output in the language corresponding to the code in this parameter.

## YandexTranslate.detectLanguage
Detects the language of the specified text.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your yandex api key.
| text  | String     | The text to detect the language for.
| hint  | String     | A list of the most likely languages (they will be given preference when detecting the text language). Use the comma as a separator.

## YandexTranslate.translate
Translates text to the specified language.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Your yandex api key.
| text   | String     | The text to translate.
| lang   | String     | The translation direction. You can set it in either of the following ways: 1. As a pair of language codes separated by a hyphen (```from-to```). For example, ```en-ru``` indicates translating from English to Russian. 2. As the target language code (for example, ru). In this case, the service tries to detect the source language automatically.
| format | String     | Text format. Possible values: ```plain``` - Text without markup (default value). ```html``` - Text in HTML format.
| options| String     | The only option available at this time is whether the response should include the automatically detected language of the text being translated. This corresponds to the value 1 for this parameter. If the language of the text being translated is defined explicitly, meaning the lang parameter is set as a pair of codes, the first code defines the source language. This means that the options parameter does not allow switching to automatic language detection. However, it does allow you to understand whether the source language was defined correctly in the lang parameter.

