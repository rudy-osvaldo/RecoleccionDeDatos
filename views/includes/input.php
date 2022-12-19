<?php foreach($item['options'] as $key=>$input): ?>

    <?php if($input['type'] == "radio"): ?>
        <div class="input-box">
            <input type="radio"name="input-<?=$index?>" value="" <?=checkdefault("input-".$index)?> hidden/>
            <input type="radio" id="input-<?=$index."-".$key?>" name="input-<?=$index?>" value="<?=$input['label']?>" <?=checkedvalue("input-".$index, $input['label'])?> />
            <label for="input-<?=$index."-".$key?>"><?=$input['label']?></label>
        </div>
    <?php endif; ?>

    <?php if($input['type'] == "radio-text"): ?>
        <div class="input-box">
            <input type="radio" id="input-<?=$index."-".$key?>" name="input-<?=$index?>" <?=checkedvalue("input-".$index, getinputcheckvalue("input-".$index))?>/>
            <label for="input-<?=$index."-".$key?>"><?=$input['label']?></label>
            <input type="text" id="input-<?=$index."-".$key?>" name="input-<?=$index?>" placeholder="Escribir aqui" <?=inputcheckvalue("input-".$index)?>>
        </div>
    <?php endif; ?>


    <?php if($input['type'] == "radio-s-n"): ?>
        <div class="input-box">
            <input type="radio" name="input-<?=$index."-".$key?>" value="" <?=checkdefault("input-".$index."-".$key)?> hidden>
            <input type="radio" name="input-<?=$index."-".$key?>" value="SI-<?=$input['label']?>" <?=checkedvalue("input-".$index."-".$key, "SI-".$input['label'])?>> &nbsp;
            <input type="radio" name="input-<?=$index."-".$key?>" value="NO-<?=$input['label']?>" <?=checkedvalue("input-".$index."-".$key, "NO-".$input['label'])?>>
            <label><?=$input['label']?></label>
        </div>
    <?php endif; ?>

    <?php if($input['type'] == "number"): ?>
        <div class="input-box">
            <label for="input-<?=$index."-".$key?>"><?=$input['label']?></label>
            <input type="number" name="input-<?=$index."-".$key?>" placeholder="Escribir aqui" <?=inputvalue("input-".$index."-".$key)?> />
        </div>
    <?php endif; ?>

    <?php if($input['type'] == "text"): ?>
        <div class="input-box">
            <label for="<?=$index."-".$key?>"><?=$input['label']?></label>
            <input type="text" id="<?=$index."-".$key?>" name="input-<?=$index."-".$key?>" placeholder="Escribir aqui" <?=inputvalue("input-".$index."-".$key)?> />
        </div>
    <?php endif; ?>

    <?php if($input['type'] == "date"): ?>
        <div class="input-box">
            <input type="date" id="<?=$index."-".$key?>" name="input-<?=$index."-".$key?>" placeholder="Escribir aqui" <?=inputvalue("input-".$index."-".$key)?> />
        </div>
    <?php endif; ?>

    <?php if($input['type'] == "textarea"): ?>
        <div class="input-box">
            <textarea name="input-<?=$key?>" placeholder="Escribir aqui" value=""><?=textareavalue("input-".$key)?></textarea>
        </div>
    <?php endif; ?>


    <?php if($input['type'] == "select"): ?>
        <div class="input-box">
            <label for="input-<?=$key?>">Departamento:</label>
            <select class="input" name="input-<?=$key?>" id="input-<?=$key?>">
                <?php foreach($input['value'] as $value): ?>
                    <option value="<?=$value?>" <?=selectvalue("input-".$key, $value)?>><?=$value?></option>
                <?php endforeach; ?>
            </select>
        </div>
    <?php endif; ?>
    

<?php $position_input++; endforeach; ?>