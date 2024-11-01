const compareObjects = require ("./compare.js");
const arrLexique = require ("./ex2_dict.js");



// Arranging a word

function arrange (word)
{
	// Removing accents and uppercase letters
	word = word.normalize ('NFD').replace (/[\u0300-\u036f]/g, '').toLowerCase ();
	
	const arr = (word).split('');
	var newWord = "";
	
	for (var car of arr)
	{
		if ('a' <= car && car <= 'z')
			newWord += car;
	}
	
	return newWord;
	
}


// Transforming each word into dictionaries

function wordToDict (word)
{
	
	const arr = (String (arrange (word))).split('');
	var dict = Object ();
	
	arr.forEach ((letter) =>
	{
		if (letter in dict)
			dict[letter] ++;
		else
			dict[letter] = 1;
	});
	
	return dict;
	
}


// Searching linearly for anagrames

function anagrammes (voulu)
{
	
	var arrAnagrammes = Array ();
	const dictVoulu = wordToDict (voulu);
	
	for (var mot of arrLexique)
	{
		const dictMot = wordToDict (mot);
		
		if (compareObjects (dictVoulu, dictMot))
			arrAnagrammes.push (mot);
	};
	
	return arrAnagrammes;
	
}


// Testing

function main ()
{
	
	console.log (anagrammes ("chientoi"));
	
}


main ();
