function bt_calculo() 
    {
        var ax_transporte = Number(ipt_transporte.value);
        var ax_carga = Number (ipt_carga.value);
        var ax_mdo = Number (ipt_mdo.value);
        var ax_perda = Number (ipt_perda.value);

        if (ax_transporte <= 0)
        {
            alert (`Erro`);
            ipt_transporte.value = ``;
        }
        else if (ax_carga <= 0)
        {
            alert (`Erro`);
            ipt_carga.value = ``;
        }
        else if (ax_mdo <= 0)
        {
            alert (`Erro`);
            ipt_mdo.value = ``;
        }
        else if (ax_perda <= 0)
        {
            alert (`Erro`);
            ipt_perda.value = ``;
        }
        else
        {
            var ax_custo1 = ax_transporte + ax_carga + ax_mdo;
            var ax_custo2 = ax_perda;
            var ax_economia1 = ax_custo1 * 0.2;
            var ax_economia2 = ax_custo2 * 0.3;
            var ax_total = ax_custo1 + ax_custo2;
            var ax_parcial1 = ax_custo1 - ax_economia1;
            var ax_parcial2 = ax_custo2 - ax_economia2;
            var ax_total_final = ax_parcial1 + ax_parcial2;
            spanText1.innerHTML = `Custo total: <b>R$ ${ax_total.toFixed(2)}</b>.`
            spanText2.innerHTML = `Custo das perdas reduzido: <b>R$ ${ax_parcial2.toFixed(2)}</b>.`
            spanText3.innerHTML = `Custo de transporte, cuidados com a carga e mão-de-obra reduzido: <b>R$ ${ax_parcial1.toFixed(2)}</b>.`
            spanText4.innerHTML = `Custo total após as reduções: <b>R$ ${ax_total_final.toFixed(2)}</b>.`
            div_2.style.display = `block`
            innerHTML = `<a href="#simulador_financeiro"></a>`
        }
    }