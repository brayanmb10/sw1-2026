const inputPokemon = document.getElementById('input-pokemon');
const btnSearch = document.getElementById('btn-search');
const btnShiny = document.getElementById('btn-shiny');
const pokemonName = document.getElementById('pokemon-name');
const pokemonType = document.getElementById('pokemon-type');
const imagemPokemon = document.getElementById('imagem-pokemon');

let currentSprites = null;
let isShinyVisible = false;

btnSearch.addEventListener('click', buscarPokemon);
inputPokemon.addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        buscarPokemon();
    }
});
btnShiny.addEventListener('click', alternarShiny);

function buscarPokemon() {
    const query = inputPokemon.value.trim().toLowerCase();
    if (!query) {
        alert('Digite o nome ou número do Pokémon.');
        return;
    }

    btnSearch.disabled = true;
    btnShiny.disabled = true;
    btnShiny.textContent = 'Mostrar Shiny';
    isShinyVisible = false;

    fetch(`https://pokeapi.co/api/v2/pokemon/${encodeURIComponent(query)}`)
        .then((response) => {
            if (!response.ok) {
                throw new Error('Pokémon não encontrado.');
            }
            return response.json();
        })
        .then((data) => {
            const typeName = data.types?.[0]?.type?.name ?? '-';
            pokemonName.textContent = `Nome: ${capitalize(data.name)}`;
            pokemonType.textContent = `Tipo: ${capitalize(typeName)}`;
            imagemPokemon.src = data.sprites?.front_default || '';
            imagemPokemon.alt = `${data.name} imagem`;
            currentSprites = data.sprites;
            if (data.sprites?.front_shiny) {
                btnShiny.disabled = false;
                btnShiny.textContent = 'Mostrar Shiny';
            }
        })
        .catch((error) => {
            console.error(error);
            alert('Não foi possível encontrar o Pokémon. Verifique o nome ou número.');
            pokemonName.textContent = 'Nome: -';
            pokemonType.textContent = 'Tipo: -';
            imagemPokemon.src = '';
            imagemPokemon.alt = 'Imagem do Pokémon';
            currentSprites = null;
            btnShiny.disabled = true;
        })
        .finally(() => {
            btnSearch.disabled = false;
        });
}

function alternarShiny() {
    if (!currentSprites) {
        return;
    }

    isShinyVisible = !isShinyVisible;
    if (isShinyVisible) {
        imagemPokemon.src = currentSprites.front_shiny || currentSprites.front_default || '';
        btnShiny.textContent = 'Mostrar Normal';
    } else {
        imagemPokemon.src = currentSprites.front_default || currentSprites.front_shiny || '';
        btnShiny.textContent = 'Mostrar Shiny';
    }
}

function capitalize(text) {
    return String(text).charAt(0).toUpperCase() + String(text).slice(1);
}




